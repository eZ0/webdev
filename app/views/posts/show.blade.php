@extends('layouts.default')

@section('content')
	<p> {{ link_to('/posts', '<- Back to all Posts') }} </p>

	<h2> {{ $post->title }} <small> [ <a href="{{ $post->link }}">source</a> ] </small></h2>

	<p><img src="@if($post->image !== NULL) {{ URL::asset($post->image) }} @endif" class="img-rounded img-responsive"/></p>

	<article class="post"> {{ $post->body }} </article>

	@if( Auth::check() )
		{{ Form::open(['route' => ['comment_path', $post->id], 'class' => 'comments_create_form']) }}
			{{ Form::hidden('post_id', $post->id) }}

			<div class="form-group">
				{{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3]) }}
			</div>
		{{ Form::close() }}
	@endif

	@if ($comments = $post->comments)
		<div class="comments">
			@foreach($comments as $comment)
				@include( 'posts.partials.comment')
			@endforeach
		</div>
	@endif
@stop