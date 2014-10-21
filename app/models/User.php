<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = [
		'username', 'email', 'password'
	];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($password)
	{
		$this->attributes['password'] = Hash::make($password);
	}

	public function profile()
	{
		return $this->hasOne('Profile');
	}

	public function isCurrent()
	{
		if (Auth::guest()) return false;

		return Auth::user()->id == $this->id;
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
