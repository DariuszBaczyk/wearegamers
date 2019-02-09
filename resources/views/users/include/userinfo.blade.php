<div class="col-md-10">
	<div class="panel panel-default">
            @if ($user->avatar != null)
                <img src="{{ asset('storage/users/' . $user->id . '/avatars/' .  $user->avatar) }}" alt="avatar" class="img-thumbnail rounded-circle" style="height:200px;"> 
            @endif

			<h1>{{ $user->name }}</h1>
			
            @if ($user->id === Auth::id())
				<a href="{{ url('/users/' . $user->id . '/edit') }}" class="pull-right">Edytuj</a>
                <a href="{{ url('/changePassword') }}">Zmień hasło</a>
			@endif

			<div>{{ $user->email }}</div>

			<div>
				@if ($user->first_name != null) {{ $user->first_name }} @endif
				@if ($user->surname != null) {{ $user->surname }} @endif
			</div>

			<div>{{ $user->about_me }}</div>
           
            <div>{{ $user->region }}</div>

            @if ($user->facebook_bio != null)
                <a href="{{ $user->facebook_bio }}">Facebook</a>                
            @endif
            
            @if ($user->instagram_bio != null)
                <a href="{{ $user->instagram_bio }}">Instagram</a>
            @endif

            @if ($user->steam_bio != null)
                <a href="{{ $user->steam_bio }}">Steam</a>
            @endif

            @if ($user->xboxlive_bio != null)
                <a href="{{ $user->xboxlive_bio }}">Xboxlive</a>
            @endif

            @if ($user->gog_bio != null)
                <a href="{{ $user->gog_bio }}">GOG</a>
            @endif

            @if ($user->battlenet_bio != null)
                <a href="{{ $user->battlenet_bio }}">BattleNET</a>
            @endif

            @if ($user->origin_bio != null)
                <a href="{{ $user->origin_bio }}">Origin</a>
            @endif



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

            <div><a href="{{ url('/users/' . $user->id . '/friends') }}">Znajomi </a>{{ $user->friends()->count() }}</div>
           
	</div>
</div>