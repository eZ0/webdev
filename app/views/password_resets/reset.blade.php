@extends('layouts.default')

@section('content')
	<h1>Reset Your Password Now</h1>
		{{ Form::open() }}
			{{ Form::hidden('token', $token) }}
			<ul>
				<li>
					{{ Form::label('email', 'Email:') }}
					{{ Form::text('email') }}
				</li>
				<li>
					{{ Form::label('password', 'New Password:') }}
					{{ Form::password('password') }}
				</li>
				<li>
					{{ Form::label('password_confirmation', 'Password Confirmation:') }}
					{{ Form::password('password_confirmation') }}
				</li>

				<li>
					{{ Form::submit('Create new password') }}
				</li>
			</ul>
		{{ Form::close() }}

	@if (Session::has('error'))
		<p>An error ocurred:</p>
		<p>{{ Session::get('reason') }}	</p>
	@endif
@stop