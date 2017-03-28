@extends('layouts.master')

@section('title')
  Welcome
@stop


@section('content')
  <div class="welcome">
    <h1>Hello</h1>
    <form action="{{route('people')}}" method="post">
      
      <div>
        <label>Please enter your json object</label>
      </div>

      <div>
        <textarea name="people" rows="10" cols="30"></textarea>
      </div>

      <div>
        <p>
          Must contain a 'data' key and an array as its value. 
          </br>
          Array must contain first_name, last_name, and age values.
        </p>
      </div>

      <input type="submit" class="btn btn-primary" val="submit">

      <div id="json-example">
        <p>Example:
        </br>
        {"data":[{"first_name":"Ada","last_name":"Lovelace","age":31,"email":"Ada@Lovelace.com"},{"first_name":"Katherine","last_name":"Johnson","age":98,"email": "katherine@mercury.com"}]}</p>
      </div>

      <div class="people-link">
        <a href="{{route('people')}}">Y'alls Inputs</a>
      </div>
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

  </div>
@stop
