<p>
	vote: {{ $post->vote }}

	{{ Form::open(['url' => '/vote']) }}
	{{ Form::hidden('post_id', $post->id) }}
		{{ Form::submit('+', ['class' => 'btn'])}}
	{{ Form::close() }}

</p>