@extends('layouts.master_1')

@section('content')


<div class="row" style="background-color: rgba(252,101,0,.1); border-top:2px solid red;">
<div class="ui centered grid">
@include('layouts.errors')
  <div class="row">
            <form class="ui form segment" method="POST" action="{{ route('register') }}">
             {!! csrf_field() !!}

             <div class="field">
                <label>Name</label>
                <div class="ui left icon input">
                <input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus>
                <i class="user icon orange"></i>
                </div>
                  
              </div>

              <div class="field">
                <label>E-mail*</label>
                <div class="ui left icon input">
                <input id="email" type="email"  name="email" value="{{ old('email') }}" required>
                <i class="mail outline icon orange"></i>
                </div> 
              </div>

              <div class="field">
                <label>Mot de passe*</label>
                <div class="ui left icon input">
                 <input id="password" type="password"  name="password" required>
                <i class="lock icon orange"></i>

                
                </div>
              </div>

              <div class="field">
                <label>Confirmation de mot de passe* <br></label>
                <div class="ui left icon input">
                 <input id="password-confirm" type="password" name="password_confirmation" required>
                <i class="lock icon orange"></i>
                </div>
              </div>

              <div class="field">
                <div class="ui checkbox">
                  <input type="checkbox" tabindex="0" class="hidden">
                  <label>J'accepte les conditions générales d’utilisation de la plateforme</label>
                </div>

              </div>

              <button class="ui orange button" type="submit">Déposer</button>
              <p>Tout les champs avec * doivent être obligatoirement remplis</p>
            </form>
        </div>


</div>
</div>

@endsection
