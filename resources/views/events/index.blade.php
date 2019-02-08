@extends('layouts.app')

@section('content')
<div class='container'>
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">Utwórz wydarzenie</div>
                   
                <div class="card-body">
                <form method="POST" action="{{ url('/events') }}">
                        {{ csrf_field() }}

                        <div class="form-group">    
                            <label>Nazwa wydarzenia</label>
                            <input class="form-control" type="text" name="name" placeholder="Wpisz nazwę wydarzenia...">
                        </div>

                        <div class="form-group">    
                            <label>Opis wydarzenia</label>
                            <textarea class="form-control" name="about" placeholder="Napisz coś o wydarzeniu..."></textarea>
                        </div>

                        <div class="form-group">    
                            <label>Data wydarzenia</label>
                            <input class="form-control" type="date" name="date">                           
                        </div>
                        <div class="form-group">    
                            <label>Godzina wydarzenia</label>
                            <input class="form-control" type="time" name="hour">                           
                        </div>
                        <div class="form-group">    
                            <label>Miejsce wydarzenia</label>
                            <input class="form-control" type="text" name="place" placeholder="Wpisz miejsce...">                           
                        </div>

                        <div class="form-group">
                        <label>Status prywatności wydarzenia</label>
                        <select id="private" name="private" class="form-control">
                            <option value="0">Publiczne</option>
                            <option value="1">Prywatne</option>
                        </select>
                        </div>
                 
                        <button class="btn btn-default" type="submit">Utwórz wydarzenie</button>
                        

                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Istniejące wydarzenia</div>
                <div class="card-body">
                
                @if ($events->count() != 0)
                <div class="card-deck mb-3 text-center">
                    @foreach($events as $event)
                    <div class="col-sm-4 text-center">                          
                        <div class="card mb-4 box-shadow">               
                            <div class="card-header">
                                <a href="{{ url ('/events/' . $event->id) }} ">{{ $event->name }}</a>
                            </div>
                            <div class="card-body">
                                <div>{{ $event->about }}</div>
                                <div>{{ $event->date }}</div>
                                <div>{{ $event->hour }}</div>
                                <div>{{ $event->place }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <h2>Nie ma wydarzeń</h2>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection