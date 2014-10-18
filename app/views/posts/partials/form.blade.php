{{ Form::open(['url' => '/posts']) }}

		<div>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['required'=>true]) }}
		</div>
		<div>
			{{ Form::label('body', 'Text:') }}
			{{ Form::textarea('body', null, ['required'=>true]) }}
		</div>

		<div>
			{{ Form::submit('Post') }}
		</div>
	
{{ Form::close() }}