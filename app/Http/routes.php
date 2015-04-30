<?php

Route::get('/', 'WelcomeController@index');

Route::get('contact', 'PagesController@contact');

Route::get('about', 'PagesController@about');

Route::get('home', 'HomeController@index');

Route::get('articles', 'ArticlesController@index');
Route::get('articles/create', 'ArticlesController@create');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles', 'ArticlesController@store');

/* Pipe Dreams */

/* List of Pipe Dreams
Route::get('pipedreams', 'PipeDreamsController@index');
// Form for creating Pipe Dreams
Route::get('pipedreams/create', 'PipeDreamsController@create');
// Show a single Pipe Dream
Route::get('pipedreams/{id}', 'PipeDreamsController@show');
// Store Pipe Dreams
Route::post('pipedreams', 'PipeDreamsController@store');
// Show a form to update a Pipe Dream
Route::get('pipedreams/{id}/edit', 'PipeDreamsController@edit'); */

Route::resource('pipedreams', 'PipeDreamsController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
