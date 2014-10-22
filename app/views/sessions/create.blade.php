@extends('layouts.default')

@section('content')

	<h1>Login</h1>

	{{ Form::open(array('route' => 'sessions.store'))}}

	<ul>
		<li>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email') }}
		</li>
		<li>
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password') }}
		</li>

		<li>
			{{ Form::submit('Login') }}
			<br/>
			{{ link_to_route('password_resets.create', 'Forgot your password?') }}
		</li>
	</ul>

	{{ Form::close() }}

@stop