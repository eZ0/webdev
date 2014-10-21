<?php

class Vote extends Eloquent {
	protected $fillable = ['post_id', 'user_id', 'vote'];


	public function user()
	{
		return $this->belongsTo('User');
	}

	public function post()
	{
		return $this->belongsTo('Post');
	}

	public function getVote($post_id){
		$vote = Vote::where('post_id' == $post_id)->firstOrFail();
		$vote = $vote + 1;
		return $vote;
	}
}