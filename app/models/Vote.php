<?php

class Vote extends Eloquent {
	protected $fillable = ['post_id', 'user_id'];

	public function checkUpvoted($user_id, $post_id)
	{
		$votes = Vote::where('post_id', '=', $post_id)->where('user_id', '=', $user_id)->first();
		
		if ($votes===NULL ) {
			$post = new Post;
			return $post->upvotes($post_id);
		}
		else
		{ 
			return false;
		}

	}

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function post()
	{
		return $this->belongsTo('Post');
	}
	
}