@extends('layouts.app')

@section('content')
	
	<!-- DANE UŻYTKOWNIKA-->
	@include('users.include.userinfo')
	<div class="col-md-10">
	<!-- DODAWANIE POSTA-->
	<div class="panel panel-default">
		<div class="panel-body">
			@if (Auth::check() && $user->id === Auth::id())
				@include('posts.create')
			@endif
		</div>
	</div>
	<!-- POSTY UŻYTKOWNIKA-->
	 @if ($posts->count() > 0)
                @foreach($posts as $post)
                    @include('posts.include.single')
                @endforeach
            @else
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4 class="text-center">Brak postów</h4>
                    </div>
                </div>
            @endif
	</div>

@endsection
