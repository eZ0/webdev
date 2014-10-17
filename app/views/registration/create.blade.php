@extends('layouts.default')

@section('content')
	<div class="starter-template">
		<h1> Sign Up</h1>
		{{ Form::open(array('route' => 'registration.store'))}}
		<div class="form-group">
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username', null, ['class' => 'form-controll', 'required' => 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['class' => 'form-controll', 'required' => 'required']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password:') }}
			{{ Form::password('password', null, ['class' => 'form-controll', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Confirm Password:') }}
			{{ Form::password('password_confirmation', null, ['class' => 'form-controll', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
		</div>
		{{ Form::close() }}
				
	</div>
@stop