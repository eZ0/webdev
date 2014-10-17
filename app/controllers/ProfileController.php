<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfileController extends \BaseController {

	/**
	 * Display the specified resource.
	 * GET /profile/{id}
	 *
	 * @param  $username
	 * @return Response
	 */
	public function show($username)
	{	
		try 
		{
			$user = User::with('profile')->whereUsername($username)->firstOrFail();
		} 
		catch (ModelNotFoundException $e)
		{
			return Redirect::home();
		} 
		

		$view = View::make('profile.show')->withUser($user);
		return $view;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /profile/{id}/edit
	 *
	 * @param  $username
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		return View::make('profile.edit')->withUser($user);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /profile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		$input = Input::only('location', 'bio', 'twitter_username', 'github_username');

		$user->profile->fill($input)->save();
		return Redirect::route('profile', $user->username);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /profile/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}