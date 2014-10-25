<?php

class VotesController extends \BaseController {
	
	public function store()
	{
		$vote = new Vote;
		$input = Input::all();
		$id = Auth::id();
		$post_id = $input['post_id'];

		$isVoted = $vote->checkUpvoted($id, $post_id);

		if($isVoted){
			$vote->create([
				'user_id' => $id,
				'post_id' => $post_id
			]);
		}
		return Redirect::back();
	}

}