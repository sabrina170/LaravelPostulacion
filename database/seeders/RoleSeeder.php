<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = Role::create(['name' => 'admin']);
        $postu = Role::create(['name' => 'postulante']);

        //estudiante, admin son vistas
        Permission::create(['name' => 'info.index'])->assignRole($postu);
        Permission::create(['name' => 'admin.index'])->syncRoles([$admin]);
    }
}
