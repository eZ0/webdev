{{ Form::open(['url' => '/posts']) }}

		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
			{{ $errors->first('title') }}
		</div>
		<div class="form-group">
			{{ Form::label('body', 'Text') }}
			{{ Form::textarea('body', null, ['class' => 'form-control', 'required' => 'required', 'rows' => 4]) }}
			{{ $errors->first('body') }}
		</div>
		
		<div class="form-group">
			{{ Form::submit('Post', ['class' => 'btn btn-primary']) }}
		</div>
	
{{ Form::close() }}