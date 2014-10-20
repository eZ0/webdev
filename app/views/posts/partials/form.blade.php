{{ Form::open(['url' => '/posts']) }}

		<div>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['required'=>true]) }}
			{{ $errors->first('title') }}
		</div>
		<div>
			{{ Form::label('body', 'Text:') }}
			{{ Form::textarea('body', null, ['required'=>true]) }}
			{{ $errors->first('body') }}
		</div>

		<div>
			{{ Form::submit('Post') }}
		</div>
	
{{ Form::close() }}