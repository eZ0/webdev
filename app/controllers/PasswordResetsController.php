<?php

class PasswordResetsController extends \BaseController {


	public function create()
	{
		return View::make('password_resets.create');
	}

	public function store()
	{
		Password::remind(['email' => Input::get('email')], function($message)
		{
			$message->subject('Your Password Reminder');
		});

		$status = Session::has('error') ? 'Could not find user with this email adres' : 'Please, check your e-mail';
		return Redirect::route('password_resets.create')->withStatus($status);
	}

	public function reset($token)
	{
		return View::make('password_resets.reset')->with('token', $token);
	}

	public function postReset()
	{
		$rules = [
		'email'                 =>'required|email',
		'password'              => 'required|min:8',
		'password_confirmation' => 'required|same:password'
		];

		$messages = [
		'required|min:8' => 'Your password should be strong, eat spinach and be at least 8 characters.',
		'same'	     => 'The :others must match.'
		];

		$validator = Validator::make(Input::all(), $rules, $messages);

		if($validator->fails()){
			$messages = $validator->messages();

			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
			$creds = [
			'email'                 => Input::get('email'),
			'password'              => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation'),
			'token'                 => Input::get('token')
			];

			$response = Password::reset($creds, function($user, $password)
			{
				$user->password = Hash::make($password);
				$user->save();
			});

			switch ($response)
			{
				case Password::INVALID_PASSWORD:
				case Password::INVALID_TOKEN:
				case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));

				case Password::PASSWORD_RESET:
				return Redirect::to('/');
			}
		}
	}
}