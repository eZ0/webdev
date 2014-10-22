@extends('layouts.default')


@section('content')
	@if( Auth::check()  ) 
		<h3>Add New Post</h3>
			@include('posts/partials/form')
	@endif

	<h1>All posts</h1>
	<ul class='list-group'>
		@foreach($posts as $post)
			
			<li class='list-group-item'> {{ link_to("posts/$post->id", $post->title) }} 
				posted by {{ link_to("profile/{$post->user->username}" , $post->user->username) }} 

				@include( 'posts.partials.vote')
			</li>
			
		@endforeach
	</ul>
@stop