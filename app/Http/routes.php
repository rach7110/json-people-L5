<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\People;
use Illuminate\Http\Request;

// WELCOME PAGE
Route::get('/', function () {
  return view('welcome');
});

// VIEW ALL THE PEOPLE
Route::get('people', 'PeopleController@index')
->name('people');

// ADD NEW PEOPLE
Route::post('people', 'PeopleController@store')
  ->name('people');


