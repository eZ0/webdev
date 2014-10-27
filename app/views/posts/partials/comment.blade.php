<article class="comment">
	<div>
		<p><small> Posted by {{ link_to("profile/{$comment->user->username}" , $comment->user->username) }} </small></p>
	</div>
	<div>
		{{ $comment->body }}
	</div>

	<br/>
</article>
