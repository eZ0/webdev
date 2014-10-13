<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', function()
{
	return View::make('hello');
}]);

Route::get('profile', function()
{
	return "Welcome, " . Auth::user()->username;
})->before('auth');

Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');

Route::resource('sessions', 'SessionsController', ['only' => ['create', 'destroy', 'store']]);

Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');
Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');
Route::resource('password_resets', 'PasswordResetsController');








