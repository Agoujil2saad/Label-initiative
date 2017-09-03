@extends('layouts.master_1')
@section('content')
<div class="row" style="background-color:rgba(214, 212, 212,.2);">
  <div class="ui centered grid">
    @include('layouts.errors')
    <div class="row">

      <div class="six wide column">
         <center>
    <h1 class="ui header">
    <div class="content">
        Devenir un Partenaire
    </div>
</h1>
</center>
<img src="{{asset('images/home_shadow.png')}}"  class="ui centred image" style="margin-bottom: 30px;">
      </div>

    <div class="nine wide  column">
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
        <button class="ui orange button" type="submit">S'inscrire</button>
        <p>Tout les champs avec * doivent être obligatoirement remplis</p>
      </form>
      </div>
    </div>



  </div>
</div>
@endsection