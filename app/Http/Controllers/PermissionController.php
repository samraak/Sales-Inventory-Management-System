<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        Permission::create([
            'permission_name' => $request->permission_name
        ]);

        return redirect('/permissions');
    }

    public function edit($id)
    {
        $permission = Permission::findOrFail($id);
        return view('permissions.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);

        $permission->update([
            'permission_name' => $request->permission_name
        ]);

        return redirect('/permissions');
    }

    public function destroy($id)
    {
        Permission::findOrFail($id)->delete();

        return redirect('/permissions');
    }
}