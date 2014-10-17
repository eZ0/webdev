<?php

class Profile extends Eloquent  {

	protected $fillable = [
		'location',
		'bio',
		'twitter_username',
		'github_username'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}
}