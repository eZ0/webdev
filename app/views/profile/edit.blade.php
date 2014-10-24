@extends('layouts.default')

@section('content')
	<h2>Edit Profile</h2>

	{{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username], 'files' => 'true']) }}
		<div class="form-group">
			{{ Form::label('location', 'Location') }}
			{{ Form::text('location', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('bio', 'About me') }}
			{{ Form::textarea('bio', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('image', 'Profile picture') }}
			{{ Form::file('image', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('twitter_username', 'Twitter') }}
			{{ Form::text('twitter_username', null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('github_username', 'Github') }}
			{{ Form::text('github_username', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::submit('Update Profile', ['class' => 'btn btn-primary'])}}

	{{ Form::close() }}
@stop