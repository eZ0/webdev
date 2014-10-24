@extends('layouts.default')

@section('content')
	<h2> {{ $user->username }} <small>from {{ $user->profile->location }} </small> </h2> 
	
	<p><img src="@if($user->profile->image !== NULL) {{ $user->profile->image }} @endif"  class="avatar"/></p>
	
	<div class='bio'>
		<p>
			{{ $user->profile->bio }}
		</p>
	</div>

	@if($user->profile->twitter_username)
		<p> {{ link_to('http://twitter.com/' . $user->profile->twitter_username, 'Twitter' ) }} </p>
	@endif
	@if($user->profile->github_username)
		<p> {{ link_to('http://github.com/' . $user->profile->github_username, 'GitHub' ) }} </p>	
	@endif

	@if ( $user->isCurrent()) 
		<p><small> Tell world more about yourself! {{ link_to_route('profile.edit', 'Edit Profile', $user->username) }} </small></p>
	@endif
@stop