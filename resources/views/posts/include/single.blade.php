<div>
	<div>{{ $post->user->name }}</div>
	<div>{{ $post->content }}</div>
	<div>{{ $post->created_at }}</div>
	<div><a href="{{ url('/posts/' . $post->id . '/edit') }}">Edytuj</a></div>
	<div>
		<form method="POST" action="{{ url('/posts/' . $post->id ) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        	<button type="submit">Usuń post</button>
        </form>

		@if (Auth::check())
			@include('comments.create')
		@endif

		@foreach ($post->comments as $comment)
			@include('comments.include.single')
		@endforeach
    </div>
</div>