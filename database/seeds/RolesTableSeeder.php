<?php

use App\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create([
            'name' => 'Administrador',
            'guard_name' => 'api'
        ]);
        $admin_role->givePermissionTo(
            Permission::all()
        );

        $pollster_role = Role::create([
            'name' => 'Encuestador',
            'guard_name' => 'api'
        ]);
        $pollster_role->givePermissionTo([
            'index-cities', 
            'index-attributes', 
            'index-parameters', 
            'index-categories'
        ]);

        $supervisor_role = Role::create([
            'name' => 'Supervisor',
            'guard_name' => 'api'
        ]);
        $pollster_role->givePermissionTo([
            'index-cities', 
            'index-attributes', 
            'index-parameters', 
            'index-categories'
        ]);

        $supervisor_role = Role::create([
            'name' => 'Coordinador',
            'guard_name' => 'api'
        ]);
        $pollster_role->givePermissionTo([
            'index-cities', 
            'index-attributes', 
            'index-parameters', 
            'index-categories'
        ]);

        $supervisor_role = Role::create([
            'name' => 'Comercial',
            'guard_name' => 'api'
        ]);
        $pollster_role->givePermissionTo([
            'index-cities', 
            'index-attributes', 
            'index-parameters', 
            'index-categories'
        ]);

        $supervisor_role = Role::create([
            'name' => 'Cliente',
            'guard_name' => 'api'
        ]);
        $pollster_role->givePermissionTo([
            'index-cities', 
            'index-attributes', 
            'index-parameters', 
            'index-categories'
        ]);
    }
}
