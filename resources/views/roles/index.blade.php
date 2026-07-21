@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

    <div class="d-flex justify-content-between mb-3">

        <h3>Roles</h3>

      <a href="{{ url('/roles/create') }}"
   class="btn btn-primary position-relative"
   style="z-index:9999;">
    + Create Role
</a>
    </div>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Role Name</th>
            <th>Action</th>
        </tr>

        @foreach($roles as $role)

        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->role_name }}</td>
           <td>

    <a href="{{ route('roles.show', $role->id) }}"
       class="btn btn-sm btn-info">
        Show
    </a>

    <a href="{{ route('roles.edit', $role->id) }}"
       class="btn btn-sm btn-warning">
        Edit
    </a>

    <a href="{{ route('roles.delete', $role->id) }}"
       class="btn btn-sm btn-danger"
       onclick="return confirm('Are you sure?')">
        Delete
    </a>

</td>
        </tr>

        @endforeach

    </table>

</div>

@endsection