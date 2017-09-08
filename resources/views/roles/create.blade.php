@extends('layouts.master_1')
@section('title','|Add Role')
@section('content')
<div class="row">
	<div class="nine wide column">
		{{ Form::open(array('url' => 'roles')) }}
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
								{{ Form::checkbox('permissions[]',  $permission->id ) }}
								{{ Form::label($permission->name, ucfirst($permission->name)) }}
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<button class="ui orange right labeled icon button" type="submit">
					Creer un Role
					<i class="plus icon"></i>
					</button>
				</div>
			</div>
			<p>Tout les champs avec * doivent être obligatoirement remplis</p>
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection