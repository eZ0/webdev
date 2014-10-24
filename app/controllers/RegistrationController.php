<?php

class RegistrationController extends \BaseController {

	public function index()
	{
		return View::make('registration.index');
	}

	public function create()
	{
		if (Auth::check()) return Redirect::home();
		return View::make('registration.create');
	}

	public function store()
	{
		$rules = [
			'username' =>'required',
			'email' =>'required|email',
			'password' => 'required',
			'password_confirmation' => 'required|same:password'
		];

		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()){
			$messages = $validator->messages();

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$user = User::create(Input::only('username', 'email', 'password'));
			
			$profile = new Profile();
			$user->profile()->save($profile);

			Auth::login($user);

			return Redirect::route('profile', $user->username);
		}
	}

}