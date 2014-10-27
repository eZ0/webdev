<?php

class SessionsController extends \BaseController {

	
	public function create()
	{
		return View::make('sessions.create');
	}

	public function store()
	{
		$input = Input::all();

		$attempt = Auth::attempt([
			'email'    => $input['email'],
			'password' => $input['password']
			]);

		if ($attempt) return  Redirect::intended('/')->with('flash_message', 'You are logged in');
		// if user is not authenticated
		return Redirect::back()->with('flash_message', 'There is no such username or combination')->withInput();
	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::home()->with('flash_message', 'You have been logged out');
	}

}