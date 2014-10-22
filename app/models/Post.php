<?php

class Post extends Eloquent  {

	protected $guarded = [ 'id' ];

      public function upvotes($post_id)
      {
            $post = Post::find($post_id);
            $vote = $post->vote;
            $vote += 1;
            
            return $post->update(array('vote' => $vote));
      }

      public function user()
      {
            return $this->belongsTo('User');
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