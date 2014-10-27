<h1>Posts I upvoted</h1>
	
<ul class='list-group'>
	@if(is_null($vote))
		<p> No upvoted posts yet! Start discovering the content.</p>
	@else
		@foreach($posts as $post)
			<li class='list-group-item'> {{ link_to("posts/$post->id", $post->title) }} 
				posted by {{ link_to("profile/{$post->user->username}" , $post->user->username) }} 
				@include( 'posts.partials.vote')
			</li>	
		@endforeach
	@endif
</ul>