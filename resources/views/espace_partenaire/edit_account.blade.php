@extends('espace_partenaire.master')
@section('espace_partenaire')
<div class="row">
	<div class="nine wide column">
		{{ Form::model($user, array('route' => array('update_myaccount_partenaire', $user->id), 'method' => 'PUT')) }}
		<div class="ui form segment">
			<h1 class="ui header">@lang('lang.edit') {{$user->name}}</h1>
			<div class="ui centered grid">
				<div class="eight wide column">
					<div class="field">
						<label>@lang('lang.user_name')</label>
						<div class="ui left icon input">
							<input type="text" name="name" value="{{$user->name}}" required>
							<i class="user icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>@lang('lang.user_email')</label>
						<div class="ui left icon input">
							<input type="email" name="email" value="{{$user->email}}" required>
							<i class="mail icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>@lang('lang.user_tel')</label>
						<div class="ui left icon input">
							<input type="tel" name="tel" value="{{$user->tel}}" required>
							<i class="phone icon orange"></i>
						</div>
					</div>
				</div>
				<div class="eight wide column">
					<div class="field">
						<label>@lang('lang.password')</label>
						<div class="ui left icon input">
							<input id="password" type="password"  name="password" required>
							<i class="lock icon orange"></i>
						</div>
					</div>
					<div class="field">
						<label>@lang('lang.password_repeat')</label>
						<div class="ui left icon input">
							<input id="password-confirm" type="password" name="password_confirmation" required>
							<i class="lock icon orange"></i>
						</div>
					</div>
				</div>
				
			</div>
			
			<div class="ui one column stackable center aligned page grid">
				<div class="column twelve wide">
					<!-- <button class="ui orange button">Suivant</button> -->
					<button class="ui orange right labeled icon button" type="submit">
						@lang('lang.edit')
					 {{$user->name}}
					<i class="add user icon"></i>
					</button>
				</div>
			</div>
			<!-- <div class="ui fluid medium orange submit button">Suivant</div> -->
			@lang('lang.obligation_filling_message')	
		</div>
		{{ Form::close() }}
	</div>
</div>
@endsection