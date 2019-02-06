@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">	

				
				<!-- DANE UŻYTKOWNIKA-->
				@include('users.include.userinfo')
				
	
				<!-- DODAWANIE POSTA-->
				<div class="col-md-10">
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
		</div>
	</div>
</div>
@endsection
