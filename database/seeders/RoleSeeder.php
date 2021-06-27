<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Consultor']);
        $role3 = Role::create(['name' => 'RevisorOSC']);
        $role4 = Role::create(['name' => 'JefeOSC']);
        $role5 = Role::create(['name' => 'RevisorAACN']);
        $role6 = Role::create(['name' => 'JefeAACN']);

        Permission::create(['name' => 'admin.index'])->syncRoles([$role1, $role2, $role3, $role4, $role5, $role6]);
        
        Permission::create(['name' => 'admin.tramites.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tramites.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tramites.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tramites.show'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.osc.asignar'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'admin.osc.estado'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'admin.osc.finalizar'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.osc.revisarosc'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'admin.osc.revisor'])->syncRoles([$role1, $role3]);

        Permission::create(['name' => 'admin.aacn.asignar'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'admin.aacn.estado'])->syncRoles([$role1, $role6]);
        Permission::create(['name' => 'admin.aacn.finalizar'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'admin.aacn.revisaraacn'])->syncRoles([$role1, $role5]);
        Permission::create(['name' => 'admin.aacn.revisor'])->syncRoles([$role1, $role5]);
    }
}
