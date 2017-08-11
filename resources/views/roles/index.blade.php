@extends('layouts.master_1')
@section('title', '| Roles')
@section('content')
<div class="row">
  <h1 class="ui header">Roles
  <a href="{{route('users.index')}}" class="ui green button">Users</a>
  <a href="{{route('permissions.index')}}" class="ui blue button">Permissions</a>
  </h1>
  <table class="ui unstackable celled table">
    <thead>
      <tr>
        <th>Role</th>
        <th>Permissions</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($roles as $role)
      <tr>
        <td>{{ $role->name }}</td>
        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
        <td>
          <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
          {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ URL::to('roles/create') }}" class="ui animated button">
    <div class="visible content">Add Role</div>
    <div class="hidden content">
      <i class="plus icon"></i>
    </div>
  </a>
</div>

@endsection