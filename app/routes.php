<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Posts
Route::get('posts', ['as' => 'allposts', 'uses' => 'PostsController@index']);
Route::get('posts/{id}', 'PostsController@show')->where('id', '\d+');


# Registration
Route::get('/register', ['as' => 'register', 'uses' =>'RegistrationController@create']);
Route::resource('registration', 'RegistrationController');

# Authentication
Route::get('login', array('as'=>'login', 'uses'=>'SessionsController@create') );
Route::get('logout', array('as'=>'logout', 'uses'=>'SessionsController@destroy') );
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'destroy', 'store']]);

# Password Reset
Route::get('password_resets/reset/{token}', 'PasswordResetsController@reset');
Route::post('password_resets/reset/{token}', 'PasswordResetsController@postReset');
Route::resource('password_resets', 'PasswordResetsController');

# Profile
Route::resource('profile', 'ProfileController', ['only' => ['show', 'edit', 'update']]);
Route::get('/{profile}', ['as' => 'profile', 'uses' => 'ProfileController@show']);
Route::get('/{profile}/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);







