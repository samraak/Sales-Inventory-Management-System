@extends('layouts.app')

@section('content')

<div class="card shadow p-4 border-0 rounded-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Users</h2>

        <a href="{{ url('/users/create') }}"
           class="btn btn-primary px-4 py-2 rounded-3">
            <i class="fa fa-plus"></i> Create User
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">

            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th width="250">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($users as $user)

                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                        <span class="badge bg-success px-3 py-2">
                            {{ $user->role->role_name ?? 'No Role' }}
                        </span>
                    </td>

                    <td>

                        <!-- Show -->
                        <a href="{{ url('/users/'.$user->id) }}"
                           class="btn btn-info btn-sm text-white">
                            <i class="fa fa-eye"></i> Show
                        </a>

                        <!-- Edit -->
                        <a href="{{ url('/users/'.$user->id.'/edit') }}"
                           class="btn btn-warning btn-sm">
                            <i class="fa fa-edit"></i> Edit
                        </a>

                        <!-- Delete -->
                        <a href="{{ url('/users/'.$user->id.'/delete') }}"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Are you sure?')">
                            <i class="fa fa-trash"></i> Delete
                        </a>

                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>

</div>

@endsection