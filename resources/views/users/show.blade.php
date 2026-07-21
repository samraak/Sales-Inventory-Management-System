@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">
            User Details
        </h3>

        <a href="/users"
            class="btn btn-secondary">

            ← Back

        </a>

    </div>

    <!-- User Info Card -->
    <div class="card shadow border-0 mb-4">

        <div class="card-body">

            <div class="row">

                <div class="col-md-4">

                    <h6 class="text-muted">
                        User Name
                    </h6>

                    <h4 class="text-primary">
                        {{ $user->name }}
                    </h4>

                </div>

                <div class="col-md-4">

                    <h6 class="text-muted">
                        Email
                    </h6>

                    <h5>
                        {{ $user->email }}
                    </h5>

                </div>

                <div class="col-md-4">

                    <h6 class="text-muted">
                        Role
                    </h6>

                    <span class="badge bg-success p-2 fs-6">

                        {{ $user->role->role_name }}

                    </span>

                </div>

            </div>

        </div>

    </div>

    <!-- Permissions Card -->
    <div class="card shadow border-0">

        <div class="card-header bg-dark text-white">

            Assigned Permissions

        </div>

        <div class="card-body">

            @if($user->role && $user->role->permissions->count() > 0)

                <div class="row">

                    @foreach($user->role->permissions as $permission)

                        <div class="col-md-3 mb-3">

                            <div class="p-3 border rounded bg-light text-center shadow-sm">

                                <i class="fa fa-check-circle text-success mb-2 fs-5"></i>

                                <br>

                                <strong>
                                    {{ $permission->permission_name }}
                                </strong>

                            </div>

                        </div>

                    @endforeach

                </div>

            @else

                <div class="alert alert-warning">

                    No permissions assigned to this role.

                </div>

            @endif

        </div>

    </div>

</div>

@endsection