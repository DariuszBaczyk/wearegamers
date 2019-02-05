@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $group->name }}</h1>
        <h2>{{ $group->about }}</h2>
    </div>
    @include('posts.create')
@endsection