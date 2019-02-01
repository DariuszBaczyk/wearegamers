<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<div>{{ $user->name }}</div>
			@if ($user->id === Auth::id())
				<a href="{{ url('/users/' . $user->id . '/edit') }}" class="pull-right">Edytuj</a>
			@endif

			<div>{{ $user->email }}</div>

			<div>{{ $user->about_me }}</div>

		</div>		
	</div>
</div>