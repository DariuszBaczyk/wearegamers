<div>
	@if ($comment->likes->count() == 1)
		{{ $comment->likes->count()}} osoba lubi to
	@elseif ($comment->likes->count() > 1 && $comment->likes->count() < 5)
		{{ $comment->likes->count()}} osoby lubią to
	@else
	{{ $comment->likes->count()}} osób lubi to
	@endif 	
</div>

@if (Auth::check())

	
	@if ( ! Auth::user()->likes->contains('comment_id', $comment->id))	
		<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			<input type="hidden" name="comment_id" value="{{ $comment->id }}">
			<button type="submit" class="btn btn-primary btn-xs">Lubię to</button>
		</form>
	@else
		<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<input type="hidden" name="comment_id" value="{{ $comment->id }}">
			<button type="submit" class="btn btn-primary btn-xs">Nie lubię</button>
		</form>
	@endif
	

@endif
