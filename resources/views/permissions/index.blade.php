@extends('layouts.master_1')
@section('title', '| Permissions')
@section('content')
<div class="row">
  <h1 class="ui header">Available Permissions
  <a href="{{route('roles.index')}}" class="ui green button">Roles</a>
  <a href="{{route('users.index')}}" class="ui blue button">users</a>
  </h1>
  <table class="ui unstackable celled table">
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
        <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="ui blue button">Edit</a>
        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
        {!! Form::submit('Delete', ['class' => 'ui red button']) !!}
        {!! Form::close() !!}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ URL::to('permissions/create') }}" class="ui animated button">
  <div class="visible content">Add permission</div>
  <div class="hidden content">
    <i class="plug icon"></i>
  </div>
</a>
</div>

@endsection