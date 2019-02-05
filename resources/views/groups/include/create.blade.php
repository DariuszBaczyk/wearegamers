<div class="col-md-10">
        <form method="POST" action="{{ url('/groups') }}">
	    {{ csrf_field() }}

	    <div class="form-group">
		    <label>Nazwa grupy</label>
		    <input type="text" name="name" placeholder="Wpisz nazwę grupy...">
	    </div>
        
        <div class="form-group">
            <label>Opis grupy:</label>
            <textarea name="about" placeholder="Opisz swoją grupę..."></textarea>

        </div>

        <div class="form-group">
            <label>Status prywatności grupy</label>
            <select id="private" name="private">
                <option value="0">Publiczna</option>
                <option value="1">Prywatna</option>
            </select>
        </div>
    <div class="form-group">
    
    <button type="submit" class="btn btn-success">Utwórz grupę</button>
</form>
    <hr>
</div>