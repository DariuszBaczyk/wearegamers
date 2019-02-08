@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <!-- TWORZENIE NOWEJ GRUPY-->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h4>Utwórz nową grupę<h4></div>
                
                <div class="card-body">
                    <form method="POST" action="{{ url('/groups') }}">
	                    {{ csrf_field() }}

                        <div class="form-group">    
                            <label>Nazwa grupy</label>
                            <input class="form-control" type="text" name="name" placeholder="Wpisz nazwę grupy...">
                        </div>
        
                        <div class="form-group">
                            <label>Opis grupy:</label>
                            <textarea class="form-control" name="about" placeholder="Opisz swoją grupę..."></textarea>
                        </div>

                        <div class="form-group">
                            <label>Status prywatności grupy</label>
                            <select id="private" name="private" class="form-control">
                                <option value="0">Publiczna</option>
                                <option value="1">Prywatna</option>
                            </select>
                        <div>
                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Utwórz grupę</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">  
            <div class="card-header"><h4>Istniejące grupy<h4></div>
            <div class="card-body">             
            @if ($groups->count() != 0)
                <div class="card-deck mb-3 text-center"> 
                @foreach ($groups as $group)
                    <div class="col-sm-4 text-center">                          
                        <div class="card mb-4 box-shadow">
                            <div class="card-header"><a href="{{ url ('/groups/' . $group->id) }} ">{{ $group->name }}</a></div>
                            <div class="card-body">
                                <div>{{ $group->about }}</div>
                                <div>{{ $group->owner_id}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else   
                <div>Nie ma grup</div>
            @endif
        </div>
    </div>
</div>

@endsection