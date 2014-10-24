<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfileController extends \BaseController {

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


	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		return View::make('profile.edit')->withUser($user);
	}


	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();
		$input = Input::only(['location', 'bio', 'twitter_username', 'github_username', 'image']);
		
		if(Input::hasFile('image'))
		{
			$file = Input::file('image');
			$filename = $file->getClientOriginalName();
			$destpath = 'assets/images/users/'.$username.'/';
				
			$file->move($destpath, $filename);
			$input['image'] = $destpath . $filename;
		} else {
			$input['image'] = '';
		}

		$user->profile->fill($input)->save();

		return Redirect::route('profile', $user->username);
	}


}