@extends('layouts.default')

@section('content')
	<div class="hellomsg">
		<h1>Hey dude!</h1>
		<p class="lead">Do you like ponies? Or red pandas? May be wombats? Browse interesting projects, solving all types of interesting problems. <br/>

		{{ Auth::check() ? 'Welcome, ' . Auth::user()->username . '!' : 'Why dont you sign up?' }}</p>
		
		@if (Auth::guest())
			<p>{{ HTML::linkRoute('register', 'Sign Up', array(), array('class' => 'btn btn-lg btn-success')) }}</p>
		@else 
			{{ HTML::linkRoute('allposts', 'All posts', array(), array('class' => 'btn btn-lg btn-success')) }}
		@endif

	</div>
@stop