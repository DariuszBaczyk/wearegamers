@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="jumbotron">
                <h1>{{ $group->name }}</h1>
                <h2>{{ $group->about }}</h2>
            </div>
            @include('posts.create')
        </div>
    </div>
</div>
 
@endsection