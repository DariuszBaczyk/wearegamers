@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card">
                <div class="card-header">              
            
                    <h1>{{ $event->name }}</h1>
                    <h2>{{ $event->about }}</h2>
                    <h2>{{ $event->date }}</h2>
                    <h2>{{ $event->time }}</h2>
                    <h2>{{ $event->place }}</h2>

                    <h5>Liczba członkow: </h5>             
                </div>

                <div class="card-body">
                    @include('events.include.create')        
                <div>             
            </div>
        </div>
    </div>
</div>
 
@endsection