@extends('layouts.default')

@section('content')
	<h1>Reset Your Password</h1>

	{{ Form::open(['route' => 'password_resets.store']) }}
		<div>
			{{ Form::label('email', 'Email:') }}
			{{ Form::text('email', null, ['required'=>true]) }}
		</div>
		<div>
			{{ Form::submit('Reset') }}
		</div>
	{{ Form::close() }}

	@if (Session::has('status'))
		<p>{{ Session::get('status') }}</p>
	@endif

@stop