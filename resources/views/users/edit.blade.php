@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-10">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				Edycja danych użytkownika {{ $user->name }}
   				</div>
   				<div class="panel-body">
   					<div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="">Nick: </label>
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}" placeholder="Imię i nazwisko">
                            </div>
                        </div>
                    </div>   					
   				

				
   					<div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="">O mnie: </label>
                                <input type="textarea" name="name" class="form-control" value="{{ $user->name }}" placeholder="Imię i nazwisko">
                            </div>
                        </div>
                    </div>   
               


					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
                            <label for="sex">Płeć</label>
                            <select class="form-control"  id="sex" type="text" class="form-control" name="sex">
                            	<option value="m" @if ($user->sex == 'm') selected @endif>Mężczyzna</option>
                            	<option value="f" @if ($user->sex == 'f') selected @endif>Kobieta</option>
                            </select>
                            </div>
                        </div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	
   					
@endsection
