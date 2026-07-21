@extends('layouts.app')

@section('content')

<div class="card p-4">

    <h3>Add Permission</h3>

    <form action="{{ route('permissions.store') }}" method="POST">
        @csrf

        <input type="text"
               name="permission_name"
               class="form-control mb-3"
               placeholder="Permission Name">

        <button class="btn btn-primary">
            Save
        </button>

    </form>

</div>

@endsection