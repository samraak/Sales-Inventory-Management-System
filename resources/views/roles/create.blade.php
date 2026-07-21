@extends('layouts.app')

@section('content')

<div class="card p-4 shadow">

    <h3>Create Role</h3>

    <form action="{{ route('roles.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Role Name</label>
            <input type="text" name="role_name" class="form-control">
        </div>

        <h5>Permissions</h5>

        @foreach($permissions as $permission)

            <div class="form-check">

               <div class="form-check mb-2">

    <input class="form-check-input"
           type="checkbox"
           name="permissions[]"
           value="{{ $permission->id }}"
           id="perm{{ $permission->id }}">

    <label class="form-check-label"
           for="perm{{ $permission->id }}">
        {{ $permission->permission_name }}
    </label>

</div>

            </div>

        @endforeach

        <button class="btn btn-primary mt-3">
            Save Role
        </button>

    </form>

</div>

@endsection