<?php

class PasswordResetsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /passwordresets
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /passwordresets/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('password_resets.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /passwordresets
	 *
	 * @return Response
	 */
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
		$creds = [
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation'),
			'token' => Input::get('token')
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
	/**
	 * Display the specified resource.
	 * GET /passwordresets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /passwordresets/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /passwordresets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /passwordresets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}