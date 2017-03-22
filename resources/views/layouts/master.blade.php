<!doctype html>

<html lang="en">

  <head>
    <meta charset="UTF-8">

    <link media="all" type="text/css" rel="stylesheet" href= "{{ URL::asset('css/style.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
    </style>

    <title>
      @yield('title')
    </title>

  </head>
    
    <body>

      @if(Session::has('message'))
        <ul>
          <div id="{{ Session::get('alert-id')}}" class="alert {{ Session::get('alert-class')}}">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <p>{{ Session::get('message')}}</p>
          </div>
        </ul>
      @endif

      <div class="container">
        @yield('content')
      </div>
    </body>

</html>