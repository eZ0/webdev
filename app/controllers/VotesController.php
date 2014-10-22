<?php

class VotesController extends \BaseController {
	
	public function index()
	{
	
	}

	public function store()
	{
		$vote = new Vote;
		$input = Input::all();
		$id = Auth::id();
		$post_id = $input['post_id'];

		$vote->checkUpvoted($id, $post_id);

		$vote->create([
			'user_id' => $id,
			'post_id' => $post_id,
			'vote' => '2'
		]);

		

		return Redirect::back();
	}

}