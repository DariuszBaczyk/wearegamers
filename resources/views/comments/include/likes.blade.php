@if (Auth::check())
	
	@if ( ! Auth::user()->likes->contains('comment_id', $comment->id))	
		<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			<input type="hidden" name="comment_id" value="{{ $comment->id }}">
			<button type="submit" class="btn btn-primary btn-xs"> Lubię to <span class="label label-info">{{ $comment->likes->count() }}</span></button>
		</form>

	@else
		<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<input type="hidden" name="comment_id" value="{{ $comment->id }}">
			<button type="submit" class="btn btn-primary btn-xs"> Nie lubię <span class="label label-info">{{ $comment->likes->count() }}</span></button>
		</form>
	@endif
	

@endif
