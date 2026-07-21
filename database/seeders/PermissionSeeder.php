<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [

            'user.create',
            'user.edit',
            'user.delete',

            'role.create',
            'role.edit',
            'role.delete',

            'product.create',
            'product.edit',
            'product.delete',

            'stock.manage',
            'sale.manage',
            'purchase.manage',
        ];

        foreach ($permissions as $permission)
        {
            Permission::create([
                'permission_name'
                    => $permission
            ]);
        }
    }
}