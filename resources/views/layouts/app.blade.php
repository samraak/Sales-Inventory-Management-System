<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body { background: #f4f6f9; }

        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #1e1e2f;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            display: block;
            color: #ddd;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #343a40;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }

        .topbar {
            margin-left: 250px;
            background: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

<div class="sidebar">
    <h4 class="text-center mb-4">My Admin</h4>

    <a href="/dashboard">
        <i class="fa fa-home"></i> Dashboard
    </a>

    @php
        $user = Auth::user();
        $role = $user->role;
    @endphp

    {{-- SUPER ADMIN --}}
    @if($role && $role->role_name == 'SuperAdmin')

        <a href="/roles">
            <i class="fa fa-user-shield"></i> Roles
        </a>

        <a href="/users">
            <i class="fa fa-users"></i> Users
        </a>

        <a href="/permissions">
            <i class="fa fa-key"></i> Permissions
        </a>

        <hr>

        <a href="/units">
            <i class="fa fa-cube"></i> Units
        </a>

        <a href="/customers">
            <i class="fa fa-user"></i> Customer
        </a>

        <a href="/suppliers">
            <i class="fa fa-truck"></i> Supplier
        </a>

        <a href="/purchase">
            <i class="fa fa-cart-plus"></i> Purchase
        </a>

        <a href="/sale">
            <i class="fa fa-shopping-cart"></i> Sale
        </a>

    @else

        {{-- ROLE MENU --}}
        @if($role && $role->permissions->contains('permission_name', 'role.create'))
            <a href="/roles">
                <i class="fa fa-user-shield"></i> Roles
            </a>
        @endif

        {{-- USER MENU --}}
        @if($role && $role->permissions->contains('permission_name', 'user.create'))
            <a href="/users">
                <i class="fa fa-users"></i> Users
            </a>
        @endif

        {{-- PERMISSION MENU --}}
        @if($role && $role->permissions->contains('permission_name', 'permission.create'))
            <a href="/permissions">
                <i class="fa fa-key"></i> Permissions
            </a>
        @endif

        <hr>

        {{-- CUSTOMER --}}
        @if($role && $role->permissions->contains('permission_name', 'customer.create'))
            <a href="/customers">
                <i class="fa fa-user"></i> Customer
            </a>
        @endif

        {{-- SUPPLIER --}}
        @if($role && $role->permissions->contains('permission_name', 'supplier.create'))
            <a href="/suppliers">
                <i class="fa fa-truck"></i> Supplier
            </a>
        @endif

        {{-- PURCHASE --}}
        @if($role && $role->permissions->contains('permission_name', 'purchase.create'))
            <a href="/purchase">
                <i class="fa fa-cart-plus"></i> Purchase
            </a>
        @endif

        {{-- SALE --}}
        @if($role && $role->permissions->contains('permission_name', 'sale.create'))
            <a href="/sale">
                <i class="fa fa-shopping-cart"></i> Sale
            </a>
        @endif

    @endif
</div>
<!-- TOP BAR -->
<div class="topbar">
    <h5>Dashboard</h5>

    <div>
        👤 {{ Auth::user()->name }}

        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button class="btn btn-sm btn-danger">Logout</button>
        </form>
    </div>
</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

</body>
</html>