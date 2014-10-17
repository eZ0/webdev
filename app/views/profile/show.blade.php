@extends('layouts.default')

@section('content')
	<h2> {{ $user->username }} <small>from {{ $user->profile->location }} </small> </h2> 
	<div class='bio'>
		<p>
			{{ $user->profile->bio }}
		</p>
	</div>

	<ul class="links">
		<li> {{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Twitter' ) }} </li>
		<li> {{ link_to('http://github.com/' . $user->profile->github_username, 'GitHub' ) }} </li>	
	</ul>

	@if ( $user->isCurrent()) 
		{{ link_to_route('profile.edit', 'Edit Profile', $user->username) }}
	@endif
@stop