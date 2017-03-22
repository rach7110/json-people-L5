<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PeopleController extends Controller
{
    function store() 
    {

      $json = json_decode(Input::get('people'));

      if( !$json )
      {
        return Redirect::to('/')->with('message', "Oops! It appears you didn't enter proper json format. Here's a quick reference guide: <a href='http://secretgeek.net/json_3mins' target='_blank'>3-Minute Guide to Json</a>")->with('alert-class', "alert-warning");
      }

    }
}
