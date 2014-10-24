@extends('layouts.default')

@section('content')
	<h3>Reset Your Password Now</h3>
	<br/>
		@if($errors->has())
			@foreach( $errors->all() as $error)
				<div class="bg-danger"> {{ $error }} </div>
			@endforeach
		@endif
		{{ Form::open() }}
			{{ Form::hidden('token', $token) }}
			<div class="form-group">
					{{ Form::label('email', 'Email') }}
					{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
			</div>
			<div class="form-group">
					{{ Form::label('password', 'New Password') }}
					{{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
			</div>
			<div class="form-group">
					{{ Form::label('password_confirmation', 'Password Confirmation') }}
					{{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
			</div>
			<div class="form-group">
					{{ Form::submit('Create new password', ['class' => 'btn btn-primary']) }}
			</div>
		{{ Form::close() }}

	@if (Session::has('error'))
		<p>An error ocurred:</p>
		<p>{{ Session::get('reason') }}	</p>
	@endif
@stop