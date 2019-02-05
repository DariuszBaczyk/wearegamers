<div>
	<div><a href="{{ url('/users/' . $post->user->id) }}">{{ $post->user->name }}</a></div>
	<div>{{ $post->content }}</div>
	<div><a href="{{ url('/posts/' . $post->id) }}"> {{ $post->created_at }} </a></div>
	<div><a href="{{ url('/posts/' . $post->id . '/edit') }}">Edytuj</a></div>
	<div>
		<form method="POST" action="{{ url('/posts/' . $post->id ) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        	<button type="submit">Usuń post</button>
        </form>

		
        @include('posts.include.likes')

		@if (Auth::check())
			@include('comments.create')
		@endif

		@foreach ($post->comments as $comment)
			@include('comments.include.single')
		@endforeach
    </div>
</div>