@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="panel-heading">Wyniki wyszukiwania użytkowników</div>
                <div class="panel-body">

                    @if($search_results->count() === 0)
                        <h4 class="text-center">Brak wyników</h4>
                    @else
                    
                        <div class="row">
                            @foreach ($search_results as $user)
                                <div class="col-sm-4 text-center">
                                    <a href="{{ url('/users/' . $user->id) }}">
                                        <div class="thumbnail">                                           
                                            <h5>{{ $user->name }}</h5>
                                        </div>
                                    </a>
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
