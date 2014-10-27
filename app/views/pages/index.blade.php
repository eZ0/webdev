@extends('layouts.default')

@section('content')

	<div class="hellomsg">
		<h1>Hey dude!</h1>
		<p class="lead">Do you like ponies? Or red pandas? May be wombats? Browse interesting projects, solving all types of interesting problems. <br/>

			{{ Auth::check() ? 'Welcome, ' . Auth::user()->username . '!' : 'Why dont you sign up?' }}</p>
			
			@if (Auth::guest())
				<p>{{ HTML::linkRoute('register', 'Sign Up', array(), array('class' => 'btn btn-lg btn-success')) }}</p>
			@else 
				<p>{{ HTML::linkRoute('allposts', 'All posts', array(), array('class' => 'btn btn-lg btn-success')) }}</p>
			@endif
	</div>

	<h1>Top posts</h1>
	<ul class='list-group'>
		@foreach($posts as $post)
			@if($post->vote > 100)
				<li class='list-group-item'> {{ link_to("posts/$post->id", $post->title) }} 
					posted by {{ link_to("profile/{$post->user->username}" , $post->user->username) }} 

					@include( 'posts.partials.vote')
				</li>
			@endif
		@endforeach
	</ul>
@stop