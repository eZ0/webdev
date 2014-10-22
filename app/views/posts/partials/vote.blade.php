<p>
	vote: {{ $post->vote }}

	@if( Auth::check() )
		{{ Form::open(['url' => '/vote']) }}
		{{ Form::hidden('post_id', $post->id) }}
			{{ Form::submit('+', ['class' => 'btn'])}}
		{{ Form::close() }}
	@endif
</p>