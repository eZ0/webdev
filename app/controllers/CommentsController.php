<?php

class CommentsController extends \BaseController {

	public function store()
	{
		$input = Input::all();
		$id = Auth::id();

		$rules = [
			'body' => 'required'
		];

		$messages = [
			'body.required' => 'You really should write something in comment section before you post'
		];

		$validator = Validator::make(Input::all(), $rules, $messages);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{
		
			Comment::create([
				'user_id' => $id,
				'post_id' => $input['post_id'],
				'body' => $input['body']
			]);
		}
		return Redirect::back();
	}

}