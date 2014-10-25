<h1>Posts I upvoted</h1>
	
	<ul class='list-group'>
		@foreach($posts as $post)
			
			<li class='list-group-item'> {{ link_to("posts/$post->id", $post->title) }} 
				posted by {{ link_to("profile/{$post->user->username}" , $post->user->username) }} 

				@include( 'posts.partials.vote')
			</li>
			
		@endforeach
	</ul>