<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1>{{ $user->name }}</h1>
			@if ($user->id === Auth::id())
				<a href="{{ url('/users/' . $user->id . '/edit') }}" class="pull-right">Edytuj</a>
			@endif

			<div>{{ $user->email }}</div>

			<div>
				@if ($user->first_name != null) {{ $user->first_name }} @endif
				@if ($user->surname != null) {{ $user->surname }} @endif
			</div>

			<div>{{ $user->about_me }}</div>

			 @if (Auth::check() && $user->id !== Auth::id())		
			     @if ( ! friendship($user->id)->exists && ! has_friend_invitation($user->id))

                    <form method="POST" action="{{ url('/friends/' . $user->id ) }}">
                        {{ csrf_field() }}
                        <button class="btn btn-success">Zaproś do znajomych</button>
                    </form>

                @elseif (has_friend_invitation($user->id))

                    <form method="POST" action="{{ url('/friends/' . $user->id ) }}">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <button class="btn btn-primary">Przyjmij zaproszenie</button>
                    </form>
                
                @elseif (friendship($user->id)->exists && ! friendship($user->id)->accepted)

                    <button class="btn btn-success disabled">Zaprosznie wysłane</button>

                @elseif (friendship($user->id)->exists && friendship($user->id)->accepted)

                    <form method="POST" action="{{ url('/friends/' . $user->id ) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-danger">Usuń ze znajomych</button>
                    </form> 

                @endif
			 
			 @endif

             <p><a href="{{ url('/users/' . $user->id . '/friends') }}">Znajomi</a> <span class="label label-default">{{ $user->friends()->count() }}</span></p>
		</div>		
	</div>
</div>