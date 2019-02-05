@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

					<form method="POST" action="{{ url('/posts/' . $post->id) }}">
					    {{ csrf_field() }}
					    {{ method_field('PATCH') }}

					    <div class="form-group">					      
					        <textarea name="post_content" class="form-control" cols="60" rows="5" placeholder="Co słychać?" style="margin-bottom: 10px;">{{ $post->content }}</textarea>
					        
					    </div>
					    <button type="submit" class="btn btn-primary pull-right">Zapisz zmiany</button>

					</form>

        		</div>
				</div>
</div>
</div>
</div>

@endsection
