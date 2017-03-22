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

      <input type="submit" class="btn btn-primary" val="submit">

      <div class="people-link">
        <a href="{{route('people')}}">Y'alls Inputs</a>
      </div>
      
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

    </form>

  </div>
@stop
