<?php

class Profile extends Eloquent  {

	protected $fillable = [
	'location',
	'bio',
	'image',
	'twitter_username',
	'github_username'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}
}