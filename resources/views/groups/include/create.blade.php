<form method="POST" action="{{ url('/posts') }}">
    {{ csrf_field() }}

    <div class="form-group">
        <textarea name="post_content" class="form-control" cols="60" rows="5" placeholder="Dodaj post w grupie..." style="margin-bottom: 10px;">{{ old('post_content') }}</textarea>
        
    </div>
    <button type="submit" class="btn btn-default pull-right">Dodaj post</button>

</form>
