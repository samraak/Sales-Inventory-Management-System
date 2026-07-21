@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">Role Details</h3>

        <a href="/roles" class="btn btn-secondary">
            ← Back
        </a>

    </div>

    <!-- Role Card -->
    <div class="card shadow border-0 mb-4">

        <div class="card-body">

            <h5 class="text-muted">Role Name</h5>

            <h3 class="mb-3 text-primary">
                {{ $role->role_name }}
            </h3>

        </div>

    </div>

    <!-- Permissions Card -->
    <div class="card shadow border-0">

        <div class="card-header bg-dark text-white">
            Assigned Permissions
        </div>

        <div class="card-body">

            @if($role->permissions->count() > 0)

                <div class="row">

                    @foreach($role->permissions as $permission)

                        <div class="col-md-3 mb-2">

                            <div class="p-2 border rounded bg-light text-center">

                                <i class="fa fa-check-circle text-success"></i>
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