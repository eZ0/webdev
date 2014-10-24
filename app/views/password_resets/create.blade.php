@extends('layouts.default')

@section('content')
	<h3>Reset Your Password</h3>
	<br/>
	@if($errors->has())
			@foreach( $errors->all() as $error)
				<div class="bg-danger"> {{ $error }} </div>
			@endforeach
	@endif
	
	{{ Form::open(['route' => 'password_resets.store']) }}
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Reset', ['class' => 'btn btn-primary']) }}
		</div>
	{{ Form::close() }}

	@if (Session::has('status'))
		<p>{{ Session::get('status') }}</p>
	@endif

@stop