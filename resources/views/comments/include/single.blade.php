
@if ( ! $loop->first)
	<hr style="margin: 10px 0;">
@endif



<div id="comment_id{{ $comment->id }}" class="{{ $comment->trashed() ? 'trashed' : ''}}">
	
	<img src="{{ url('user-avatar/'. $comment->user->id. '/35') }}" alt="" class="img-responsive pull-left">
	
	<div style="padding-left: 10px; overflow: hidden;">
		<a href="{{ url('/posts/' . $post->id . '#comment_id' . $comment->id) }}" class="text-muted pull-right"><small><span class="glyphicon glyphicon-time"></span> {{ $post->created_at }}</small></a>
		<a href="{{ url('/users/' . $comment->user->id) }}"><strong>{{ $comment->user->name }}</strong></a><br>
		{{ $comment->content }}
	</div>
	
	

</div>
