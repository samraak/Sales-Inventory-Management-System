<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        $permissions =
            Permission::all();

        return view(
            'roles.create',
            compact('permissions')
        );
    }
    public function show($id)
{
    $role = Role::with('permissions')->findOrFail($id);

    return view('roles.show', compact('role'));
}
public function edit($id)
{
    $role = Role::with('permissions')->findOrFail($id);
    $permissions = Permission::all();

    return view('roles.edit', compact('role', 'permissions'));
}
public function update(Request $request, $id)
{
    $role = Role::findOrFail($id);

    $role->update([
        'role_name' => $request->role_name
    ]);

    $role->permissions()->sync($request->permissions);

    return redirect('/roles')->with('success', 'Role Updated');
}
public function destroy($id)
{
    Role::findOrFail($id)->delete();

    return redirect('/roles')->with('success', 'Role Deleted');
}
public function index()
{
    $roles = Role::all();

    return view(
        'roles.index',
        compact('roles')
    );
}
    public function store(Request $request)
    {
        $request->validate([
            'role_name'
                => 'required|unique:roles'
        ]);

        $role = Role::create([
            'role_name'
                => $request->role_name
        ]);

        $role->permissions()->sync(
            $request->permissions
        );

        return redirect()
            ->back()
            ->with(
                'success',
                'Role Created Successfully'
            );
    }
}