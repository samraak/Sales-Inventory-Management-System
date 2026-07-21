@extends('layouts.app')

@section('content')

<div class="card p-4">

    <h3>Permissions</h3>

   <a href="/permissions/create" class="btn btn-primary">
    + Add New Permission
</a>

    <table class="table table-bordered">

        @foreach($permissions as $permission)

        <tr>
            <td>{{ $permission->permission_name }}</td>
            <td>
                <a href="/permissions/{{ $permission->id }}/edit">Edit</a>
                <a href="/permissions/{{ $permission->id }}/delete">Delete</a>
            </td>
        </tr>

        @endforeach

    </table>

</div>

@endsection