<div class="card">
	<div class="card-header">
	<img src="{{ asset('storage/users/' . $post->user->id . '/avatars/' .  $post->user->avatar) }}" alt="avatar" class="img-thumbnail" style="height:75px; "> 

	<div><a href="{{ url('/users/' . $post->user->id) }}">{{ $post->user->name }}</a></div>
	<div><a href="{{ url('/posts/' . $post->id . '/edit') }}">Edytuj</a></div>
	
	
		<form method="POST" action="{{ url('/posts/' . $post->id ) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        	<button type="submit" class="btn btn-default">Usuń post</button>
        </form>

	<div class="post-body">
	<div>{{ $post->content }}</div>
	<div><a href="{{ url('/posts/' . $post->id) }}"> {{ $post->created_at }} </a></div>
	

		
        @include('posts.include.likes')

		@if (Auth::check())
			@include('comments.create')
		@endif

		@foreach ($post->comments as $comment)
			@include('comments.include.single')
		@endforeach
		</div>
    </div>
</div>