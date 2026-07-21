@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

    <h2>Edit User</h2>

    <form action="/users/{{ $user->id }}/update"
        method="POST">

        @csrf

        <div class="mb-3">
            <label>Name</label>

            <input type="text"
                name="name"
                class="form-control"
                value="{{ $user->name }}">
        </div>

        <div class="mb-3">
            <label>Email</label>

            <input type="email"
                name="email"
                class="form-control"
                value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label>Role</label>

            <select name="role_id"
                class="form-control">

                @foreach($roles as $role)

                    <option
                        value="{{ $role->id }}"
                        {{ $user->role_id == $role->id ? 'selected' : '' }}>

                        {{ $role->role_name }}

                    </option>

                @endforeach

            </select>
        </div>

        <button class="btn btn-primary">
            Update User
        </button>

    </form>

</div>

@endsection