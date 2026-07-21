@extends('layouts.app')

@section('content')

<div class="card p-4 shadow">

    <h3>Edit Role</h3>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Role Name</label>
            <input type="text"
                   name="role_name"
                   value="{{ $role->role_name }}"
                   class="form-control">
        </div>

        <h5>Permissions</h5>

        @foreach($permissions as $permission)

            <div class="form-check">

                <input type="checkbox"
                       name="permissions[]"
                       value="{{ $permission->id }}"
                       class="form-check-input"
                       {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>

                <label class="form-check-label">
                    {{ $permission->permission_name }}
                </label>

            </div>

        @endforeach

        <button class="btn btn-primary mt-3">
            Update Role
        </button>

    </form>

</div>

@endsection