@extends('layouts.default')

@section('content')
	<h3> Sign Up</h3>
	<br/>
		
	@if($errors->has())
		@foreach( $errors->all() as $error)
			<div class="bg-danger"> {{ $error }} </div>
		@endforeach
	@endif

	{{ Form::open(array('route' => 'registration.store'))}}
		<div class="form-group">
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Somebody Awesome']) }}
		</div>

		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'awes@me.com']) }}
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('password_confirmation', 'Confirm Password') }}
			{{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}		
@stop