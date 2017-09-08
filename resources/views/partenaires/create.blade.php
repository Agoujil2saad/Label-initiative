@extends('layouts.master_1')
@section('title', '| Create New Post')
@section('content')
<div class="row">
	@include('layouts.errors')
	<div class="nine wide column">
		{{ Form::open(array('route' => 'partenaire.store','files' => true)) }}
		<div class="ui form segment">
			<div class="ui centered grid">
				<div class=" column">
					<div class="field">
						<label>Logo du partenaire</label>
						<div class="ui left icon  input">
							{{ Form::file('logo', null)}}
							<i class="handshake orange icon"></i>
						</div>
					</div>
					<div class="field">
						<label>Nom du partenaire*</label>
						<div class="ui left icon input">
							<input type="text" name="name" placeholder="Titre du partenaire" required>
							<i class="user icon orange"></i>
						</div>
					</div>
				</div>
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<button class="ui orange right labeled icon button" type="submit">
					Ajouter un partenaire
					<i class="right chevron icon"></i>
					</button>
				</div>
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection