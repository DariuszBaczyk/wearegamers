@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="card">
                <div class="card-header">              
            
                    <h1>{{ $group->name }}</h1>
                    <h2>{{ $group->about }}</h2>
                    <h5>Liczba członkow: </h5>             
                </div>

                <div class="card-body">
                    @include('groups.include.create')        
                <div>             
            </div>
        </div>
    </div>
</div>
 
@endsection