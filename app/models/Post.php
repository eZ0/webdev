<?php

class Post extends Eloquent  {

	protected $guarded = [ 'id' ];

      public function user()
      {
            return $this->belongsTo('User');
      }

}