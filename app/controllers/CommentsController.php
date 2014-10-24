<?php

class CommentsController extends \BaseController {

	public function store()
	{
		$input = Input::all();
		$id = Auth::id();
		
		Comment::create([
			'user_id' => $id,
			'post_id' => $input['post_id'],
			'body' => $input['body']
		]);

		return Redirect::back();
	}

}