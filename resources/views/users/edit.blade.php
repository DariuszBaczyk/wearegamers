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

                         <div class="form-group">
                            <label for="sex">{{ __('Województwo: ') }}</label>
                            <select class="form-control" type="text" name="region" value="{{ $user->region }}">
                                <option value=""></option>
                                <option value="dolnośląskie">dolnośląskie</option>
                                <option value="kujawsko-pomorskie">kujawsko-pomorskie</option>
                                <option value="lubelskie">lubelskie</option>
                                <option value="lubuskie">lubuskie</option>
                                <option value="łódzkie">łódzkie</option>
                                <option value="małopolskie">małopolskie</option>
                                <option value="mazowieckie">mazowieckie</option>
                                <option value="opolskie">opolskie</option>
                                <option value="podkarpacie">podkarpacie</option>
                                <option value="podlaskie">podlaskie</option>
                                <option value="pomorskie">pomorskie</option>
                                <option value="śląskie">śląskie</option>
                                <option value="świętokrzyskie">świętokrzyskie</option>
                                <option value="warmińsko-mazurskie">warmińsko-mazurskie</option>
                                <option value="wielkopolskie">wielkopolskie</option>                      
                                <option value="zachodniopomorskie">zachodniopomorskie</option>
                            </select>
                        </div>   
                        <hr>
                            <div class="form-group">
                                <label for="name">{{ __('Twój profil Facebook: ') }}</label>
                                <input type="text" class="form-control" name="facebook_bio" placeholder="Wklej link do Twojego profilu na Facebooku" value="{{ $user->facebook_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twój profil Instagram: ') }}</label>
                                <input type="text" class="form-control" name="instagram_bio" placeholder="Wklej link do Twojego profilu na Instagramie" value="{{ $user->instagram_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twój profil Steam: ') }}</label>
                                <input type="text" class="form-control" name="steam_bio" placeholder="Wklej link do Twojego profilu na Steamie" value="{{ $user->steam_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twój profil Xboxlive: ') }}</label>
                                <input type="text" class="form-control" name="xboxlive_bio" placeholder="Wklej link do Twojego profilu na Xboxlive"value="{{ $user->xboxlive_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twój profil GOG: ') }}</label>
                                <input type="text" class="form-control" name="gog_bio" placeholder="Wklej link do Twojego profilu na GOG"value="{{ $user->gog_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twój profil BattleNET: ') }}</label>
                                <input type="text" class="form-control" name="battlenet_bio" placeholder="Wklej link do Twojego profilu na BattleNET" value="{{ $user->battlenet_bio }}">
                            </div>

                            <div class="form-group">
                                <label for="name">{{ __('Twoj profil Origin: ') }}</label>
                                <input type="text" class="form-control" name="origin_bio" placeholder="Wklej link do Twojego profilu na Originie"value="{{ $user->origin_bio }}">
                            </div>
                        <hr> 


                                       
                        <button type="submit" class="btn btn-primary ">Zapisz zmiany</button>
                    </form>

                    <hr>
                        <div><b>Zmiana hasła</b></div>

                        <form action="{{ url('/users/' . $user->id) }}" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <label for="name">{{ __('Stare hasło: ') }}</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Nowe hasło: ') }}</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <label for="name">{{ __('Powtórz nowe hasło: ') }}</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="form-group">
                                <button tpye="submit" class="btn btn-default">Zmień hasło</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
