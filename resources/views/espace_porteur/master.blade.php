@extends('layouts.master_1')
@section('content')
<div class="ui internally stackable celled grid" style="background-color: rgba(252,101,0,.1); border-top:2px solid red;">
	<div class="row">
		<div class="four wide column">
			<div class="ui compact vertical labeled icon menu">
				<a class="item">
					<i class="travel icon orange"></i>
					Mon projet
				</a>
				<a class="item">
					<i class="folder icon orange"></i>
					Mon compte
				</a>
				<a class="item">
					<i class="newspaper icon orange"></i>
					Actualité du projet
				</a>
				<a class="item">
					<i class="users icon orange"></i>
					Mes Partenaires
				</a>
				<a class="item">
					<i class="mail outline icon orange"></i>
					Messages Reçus
				</a>
			</div>
		</div>
		<div class="twelve wide column">
			<div class="row" id="menu_bar">
				<button class="ui orange button">
				<i class="plus icon"></i>
				Publier une nouvelle
				</button>
			</div>
			
			<div class="ui internally centered grid">
				@yield('espace_porteur')	
			</div>
		</div>

	</div>
</div>
@endsection