@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">	

				<div class="card-header">				
				@include('users.include.userinfo')				
				<div>

				<!-- DODAWANIE POSTA-->
				<div class="col-md-10">
				
					<div class="card-body">
						@if (Auth::check() && $user->id === Auth::id())
							@include('posts.create')
						@endif
					</div>
				
	
				<!-- POSTY UŻYTKOWNIKA-->
				@if ($posts->count() > 0)
     			    @foreach($posts as $post)
						@if($post->group_id == null || $post->event_id == null)
   			        		@include('posts.include.single')
						@endif
					@endforeach
    			    @else
   			    	    <div class="panel panel-default">
    			            <div class="panel-body">
   			        	        <h4 class="text-center">Brak postów</h4>
  			        	    </div>
  			            </div>
        		@endif
			</div>
		</div>
	</div>
</div>
@endsection
