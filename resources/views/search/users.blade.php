@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">Wyniki wyszukiwania użytkowników</div>
                <div class="card-body">

                    @if($search_results->count() === 0)
                        <h4 class="text-center">Brak wyników</h4>
                    @else
                    
                        <div class="row">
                            @foreach ($search_results as $user)
                                
                                <div class="col-sm-4 text-center">
                                    <div class="card">   
                                    <img src="{{ asset('storage/users/' . $user->id . '/avatars/' .  $user->avatar) }}" alt="avatar" class="img-thumbnail" style="height:200px;"> 
                                        <a href="{{ url('/users/' . $user->id) }}">{{ $user->name }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {{ $search_results->appends(['q' => $search_thing])->links() }}
                        </div>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
