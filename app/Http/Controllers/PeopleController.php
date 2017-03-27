<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Input;
use Redirect;
use App\People;
use View;

class PeopleController extends Controller
{

    function index() {
      $people = People::all();

      return View::make('people.index')->with(array('people' => $people));
    }

    function store() 
    {
      $json = json_decode(Input::get('people'));

      // DISPLAY ERROR MESSAGE IF NOT JSON FORMAT":
      if( !$json )
      {
        return Redirect::to('/')->with('message', "Oops! It appears you didn't enter proper json format.")->with('alert-class', "alert-warning");
      }

      $people = new People; 
      $people_with_full_name = $people->full_name($json);

      $people->age_sorted = $people->descend_by_age($people_with_full_name);
      $people->emails = $people->email_list($json);

      if ( $people->save() )
      {
        return Redirect::to('/')->with('message', "You have successfully added some people to the database!")->with('alert-class', "alert-success");
      }
    }
}
