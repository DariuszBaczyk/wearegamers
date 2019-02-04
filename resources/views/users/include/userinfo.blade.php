<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div>{{ $user->name }}</div>
			@if ($user->id === Auth::id())
				<a href="{{ url('/users/' . $user->id . '/edit') }}" class="pull-right">Edytuj</a>
			@endif

			<div>{{ $user->email }}</div>

			<div>
				@if ($user->first_name != null) {{ $user->first_name }} @endif
				@if ($user->surname != null) {{ $user->surname }} @endif
			</div>

			<div>{{ $user->about_me }}</div>

			<div><a href="{{ url('/users/' . $user->id . '/friends') }}">Znajomi</a>{{ $user->friends()->count() }}</div>
		

		</div>		
	</div>
</div>