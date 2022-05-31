<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'verpanel'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'editaproyecto'])->syncRoles([$role1]);
        Permission::create(['name' => 'eliminarproyecto'])->syncRoles([$role1]);
        Permission::create(['name' => 'agregarproyecto'])->syncRoles([$role1]);

    }
}
