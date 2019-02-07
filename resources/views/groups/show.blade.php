@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="jumbotron">
                <h1>{{ $group->name }}</h1>
                <h2>{{ $group->about }}</h2>
                <h5>Liczba członkow: </h5>         
                <?php 
                    var_dump($group->id);
                ?>      
            </div>
            @include('groups.include.create')
            
            <div>
                @if($post->group_id == $group->id)
                @include('posts.include.single')
                @endif
            </div>
        </div>
    </div>
</div>
 
@endsection