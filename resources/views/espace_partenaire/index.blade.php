@extends('espace_partenaire.master')
@section('espace_partenaire')
<div class="row">
	<div class="ui two stackable item secondary menu">
		<a href="/espace_partenaire/projets/type1" class="item"> <p class="ui orange small header">Catégorie 1</p></a>
		<a href="/espace_partenaire/projets/type2" class="item"><p class="ui orange small header">Catégorie 2</p></a>
	</div>
</div>
@include('partials.all_projet')
@endsection