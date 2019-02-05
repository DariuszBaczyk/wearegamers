@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Wyniki wyszukiwania grup</div>
                <div class="panel-body">

                    @if($search_results->count() === 0)
                        <h4 class="text-center">Brak wyników</h4>
                    @else
                    
                        <div class="row">
                            @foreach ($search_results as $group)
                                <div class="col-sm-4 text-center">
                                    <a href="{{ url('/group/' . $group->id) }}">
                                        <div class="thumbnail">                                           
                                            <h5>{{ $group->name }}</h5>
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
