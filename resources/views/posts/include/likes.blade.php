<div>
	@if ($post->likes->count() == 1)
		{{ $post->likes->count()}} osoba lubi to
	@elseif ($post->likes->count() > 1 && $post->likes->count() < 5)
		{{ $post->likes->count()}} osoby lubią to
	@else
	{{ $post->likes->count()}} osób lubi to
	@endif 	
</div>
@if (Auth::check())

	@if ( ! Auth::user()->likes->contains('post_id', $post->id))

	<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			<input type="hidden" name="post_id" value="{{ $post->id }}">
			<button type="submit" class="btn btn-primary btn-x">Lubię to</button>
	</form>
	
	@else
	
		<form method="POST" action="{{ url('/likes') }}" style="margin-top: 10px;">
			{{ csrf_field() }}
			{{ method_field('DELETE') }}
			<input type="hidden" name="post_id" value="{{ $post->id }}">
			<button type="submit" class="btn btn-primary btn-xs">Nie lubię</button>
		</form>
		
	@endif
	
@endif