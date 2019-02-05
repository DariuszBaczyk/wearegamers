@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tablica</div>

                <div class="card-body">
                    @include('posts.create')

                    @foreach($posts as $post)
                        @include('posts.include.single')
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
