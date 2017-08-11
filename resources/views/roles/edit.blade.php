@extends('layouts.master_1')
@section('title','|Edit Role')
@section('content')
<div class="row">
	<div class="nine wide column">
	<h1 class="ui header">Edit Role:{{$role->name}}</h1>
		{{-- Using the Laravel HTML Form Collective to create our form --}}
		 {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
		 		<div class="ui form segment">
			<div class="ui centered grid">
				<div class="eight wide column">
					<div class="field">
						<label>Nom du Role</label>
						<div class="ui left icon input">
							<input type="text" name="name" placeholder="Nom Complet" required>
							<i class="user icon orange"></i>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="grouped fields">
						<label>assign permission</label>
						@foreach($permissions as $permission)
						<div class="field">
							<div class="ui radio checkbox">
								{{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
								{{Form::label($permission->name, ucfirst($permission->name)) }}
							</div>
						</div>
						@endforeach
					</div>

				</div>
				
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<!-- <button class="ui orange button">Suivant</button> -->
					<button class="ui orange right labeled icon button" type="submit">
					Edit
					<i class="plus icon"></i>
					</button>
				</div>
			</div>
			<!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection