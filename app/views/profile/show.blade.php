@extends('layouts.default')

@section('content')
	<h2> {{ $user->username }} <small>from {{ $user->profile->location }} </small> </h2> 
	<div class='bio'>
		<p>
			{{ $user->profile->bio }}
		</p>
	</div>

	@if($user->profile->twitter_username or $user->profile->github_username)
	<ul class="links">
		<li> {{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Twitter' ) }} </li>
		<li> {{ link_to('http://github.com/' . $user->profile->github_username, 'GitHub' ) }} </li>	
	</ul>
	@endif

	@if ( $user->isCurrent()) 
		<p>Tell world more about yourself! <small> {{ link_to_route('profile.edit', 'Edit Profile', $user->username) }} </small></p>
	@endif
@stop