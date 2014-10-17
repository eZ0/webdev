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

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('/register', ['as' => 'register', 'uses' =>'RegistrationController@create']);
Route::resource('registration', 'RegistrationController');

Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@index'])->before('auth');

Route::get('login', array('as'=>'login', 'uses'=>'SessionsController@create') );
Route::get('logout', array('as'=>'logout', 'uses'=>'SessionsController@destroy') );

Route::resource('sessions', 'SessionsController', ['only' => ['create', 'destroy', 'store']]);

Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');
Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');
Route::resource('password_resets', 'PasswordResetsController');








