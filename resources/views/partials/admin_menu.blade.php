 <div class="row">
 <h1 class="ui center aligned icon header">
    <i class="circular privacy icon"></i> gestion des {{ str_replace(".index","",Route::currentRouteName())}} <br>
    <div class="ui menu">
      <div class="item"><a href="{{route('permissions.index')}}" class="ui orange button"> <i class="privacy icon"></i> gestion des Permissions</a></div>
  <div class="item"><a href="{{route('roles.index')}}" class="ui orange button"> <i class="street view icon"></i> gestion des Roles</a></div>
  <div class="item"><a href="{{route('users.index')}}" class="ui orange  button"><i class="users icon"></i> gestion des Utilisateurs</a></div>
  <div class="item"><a href="{{route('evenement.index')}}" class="ui orange  button"> <i class="checked calendar icon"></i>gestion des Evenement</a></div>
  <div class="item"><a href="{{route('partenaire.index')}}" class="ui orange  button"><i class="handshake icon"></i>gestion des Partenaires OFFICIELS</a></div>
  </div>
  </h1>
   </div>