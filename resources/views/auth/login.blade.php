@extends('layouts.master_1')
@section('content')



<div class="row" style="background-color:rgba(214, 212, 212,.2);">


<div class=" six wide column">
   <center>
    <h1 class="ui header">
    <div class="content">
        Soyez les bienvenus 
    </div>
</h1>
</center>
<img src="{{asset('images/home_shadow.png')}}"  class="ui centred image" style="margin-bottom: 30px;">
</div>
<div class=" six wide column">
    <form class="ui segment form" method="POST" action="{{ route('login') }}">
        {!! csrf_field() !!}
        
        <div class="field">
            <label>*Email</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        </div>
        
        
        <div class="field">
            <label>*Password</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        
        <div class="field">
            <div class="ui checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label>Remember me</label>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="ui orange button">
            Login
            </button>
            <a class="ui label" href="{{ route('password.request') }}">
                Forgot Your Password?
            </a>     
        </div>


        <div class="ui tiny subheader">
            vous n'avez pas encore de compte, créez-en un maintenant pour démarrer votre projet ou pour aider les autres et partager vos connaissances pour élever le pays tout entier. <br>
 </div>
            <div class="ui small buttons">
  <a class="ui yellow button" href="/register"> Devenir Partenaire</a>
  <div class="or"></div>
  <a class="ui orange button" href="/deposer">Devenir Porteur de Projet</a>
</div

       
        
    </form>
</div>
</div>
@endsection