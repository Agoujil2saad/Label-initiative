@extends('layouts.master_1')
@section('title', '| Permissions')
@section('content')
<div class="row">
 <h1 class="ui center aligned icon header">
    <i class="circular privacy icon"></i> gestion des Permissions <br>
  <a href="{{route('roles.index')}}" class="ui green button"> gestion des Roles</a>
  <a href="{{route('users.index')}}" class="ui blue button">gestion des Utilisateurs</a>
  </h1>
  <table class="ui unstackable very padded celled table">
    <thead>
      <tr>
        <th>Permissions</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($permissions as $permission)
      <tr>
        <td>{{ $permission->name }}</td>
        <td>
        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="ui  left floated  button">Edit</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
        {!! Form::submit('Delete', ['class' => 'ui red right floated button']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ URL::to('permissions/create') }}" class="ui animated button" style="margin:2em;">
  <div class="visible content">Add permission</div>
  <div class="hidden content">
    <i class="plug icon"></i>
  </div>
</a>
</div>

@endsection