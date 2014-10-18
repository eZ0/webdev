@extends('layouts.default')

@section('content')
	<p> {{ link_to('/posts', '<- Back to all Posts') }} </p>

	<h2> {{ $post->title }} </h2>
	<article> {{ $post->body }} </article>
@stop