	<br/>
	@if($errors->has())
		@foreach( $errors->all() as $error)
			<div class="bg-danger"> {{ $error }} </div>
		@endforeach
	@endif

	{{ Form::open(['url' => '/posts', 'files' => 'true']) }}

		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
		</div>
		<div class="form-group">
			{{ Form::label('link', 'URL') }}
			{{ Form::text('link', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('image', 'Picture') }}
			{{ Form::file('image', null, ['class' => 'form-control']) }}
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Text') }}
			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 4]) }}
		</div>
		
		<div class="form-group">
			{{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
		</div>
	
	{{ Form::close() }}