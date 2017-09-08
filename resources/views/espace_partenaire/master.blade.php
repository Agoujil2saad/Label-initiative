@extends('layouts.master_1')
@section('content')
<div class="ui stackable celled grid" style="background-color: rgba(214, 212, 212,.2);padding:0;margin:0">
  <div class="row">
    <div class="four wide column">
      <div class="ui compact vertical labeled icon menu">
        <a class="item" href="/espace_partenaire">
          <i class="home icon orange"></i>
          Tous les projets
        </a>
        <a class="item" href="/espace_partenaire/fav_projets">
          <i class="folder icon orange"></i>
          les projets suivis
        </a>
        <a class="item" href="/espace_partenaire/myaccount">
          <i class="configure icon orange"></i>
          Modifier mon compte
        </a>
        <a class="item" href="/espace_partenaire/chat">
          <i class="mail outline icon orange"></i>
          Chat Avec Mes Porteurs De Projet
        </a>
      </div>
    </div>
    <div class="twelve wide column">
      <div class="ui very padded centered grid" style="padding-right: 30px;">
        @yield('espace_partenaire')
      </div>
    </div>
  </div>
</div>
@endsection