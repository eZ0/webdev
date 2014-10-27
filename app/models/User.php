<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'users';

	protected $fillable = [
		'username', 'email', 'password'
	];

	protected $hidden = array('password', 'remember_token');


	public function isCurrent()
	{
		if (Auth::guest()) return false;

		return Auth::user()->id == $this->id;
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function posts()
      {
            return $this->hasMany('Post');
      }

      public function comments()
      {
            return $this->hasMany('Comment');
      }

      public function votes()
      {
            return $this->hasMany('Vote');
      }
}
