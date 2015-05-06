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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

/* Route::get('pipedreams', 'PipeDreamsController@index');
Route::get('pipedreams/create', 'PipeDreamsController@create');
Route::get('pipedreams/{id}', 'PipeDreamsController@show');
Route::post('pipedreams', 'PipeDreamsController@store'); */

Route::resource('pipedreams', 'PipeDreamsController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
