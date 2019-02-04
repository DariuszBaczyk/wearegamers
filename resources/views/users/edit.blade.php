@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edytuj profil użytkownika {{ $user->name }}</div>

                <div class="card-body">
                  
                
                    <form action="{{ url('/users/' . $user->id) }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="form-group">
                            <label for="name">{{ __('Avatar: ') }}</label>
                            <input type="file" class="form-control" name="avatar" value="{{ $user->avatar }}">
                         </div>
                        
                        
                        <div class="form-group">
                            <label for="name">{{ __('Twój nick: ') }}</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                         </div>

                         <div class="form-group">
                            <label for="name">{{ __('Imię: ') }}</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}">
                         </div>

                         <div class="form-group">
                            <label for="name">{{ __('Nazwisko ') }}</label>
                            <input type="text" class="form-control" name="surname" value="{{ $user->surname }}">
                         </div>

                         <div class="form-group">
                            <label for="sex">{{ __('Płeć: ') }}</label>
                            <select class="form-control" type="text" name="sex" value="{{ $user->sex }}">
                                <option value="m">Mężczyzna</option>
                                <option value="f">Kobieta</option>                          
                            </select>
                        </div>    
                        
                        <div class="form-group">
                            <label for="name">{{ __('Data urodzenia: ') }}</label>
                            <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                         </div>

                         
                         <div class="form-group">
                            <label for="name">{{ __('O mnie: ') }}</label>
                            <textarea class="form-control" rows="4" name="about_me" value="{{ $user->about_me }}">{{ $user->about_me }}</textarea>
                         </div>                         
                       
                         <div class="form-group">
                            <label for="name">{{ __('Numer telefonu: ') }}</label>
                            <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                         </div>                     
                                       
                        <button type="submit" class="btn btn-primary ">Zapisz zmiany</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
