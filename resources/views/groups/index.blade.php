@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <!-- TWORZENIE NOWEJ GRUPY-->
        @include('groups.include.create')

        <!-- WYSZUKIWANIE GRUP -->
        <form method="GET" action="{{ url('/search') }}" class="navbar-form navbar-left">
                    <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Szukaj grupy...">
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">Szukaj</button>
                 </span>
            </div>
        </form>
         
            @if ($groups->count() != 0)
                @foreach ($groups as $group)
                    <div><a href="{{ url ('/groups/' . $group->id) }} ">{{ $group->name }}</a></div>
                    <div>{{ $group->about }}</div>
                    <div>{{ $group->owner_id}}</div>
                @endforeach
           
            @else   
                <div>Nie ma grup</div>
            @endif
            
            
         
     
    </div>
</div>
@endsection