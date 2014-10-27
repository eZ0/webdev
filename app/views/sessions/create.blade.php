@extends('layouts.default')

@section('content')
	<h3> Sign In </h3>
	<br/>

	{{ Form::open(array('route' => 'sessions.store'))}}

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'awes@me.com']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
			<br/>
			<p><small>{{ link_to_route('password_resets.create', 'Forgot your password?') }}</small></p>
		</div>

	{{ Form::close() }}

@stop