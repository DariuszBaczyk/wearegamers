@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <!-- TWORZENIE NOWEJ GRUPY-->
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Utwórz nową grupę</div>    
                <div class="panel-body">
                    <form method="POST" action="{{ url('/groups') }}">
	                {{ csrf_field() }}

                    <div class="form-group">    
                        <label>Nazwa grupy</label>
                        <input class="form-control" type="text" name="name" placeholder="Wpisz nazwę grupy...">
                    </div>
        
                    <div class="form-group">
                        <label>Opis grupy:</label>
                        <textarea name="about" placeholder="Opisz swoją grupę..."></textarea>
                    </div>

                    <div class="form-group">
                        <label>Status prywatności grupy</label>
                        <select id="private" name="private" class="form-control">
                            <option value="0">Publiczna</option>
                            <option value="1">Prywatna</option>
                        </select>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Utwórz grupę</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    
    
    

 

                
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