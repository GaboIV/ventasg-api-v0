<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Países
        DB::unprepared(file_get_contents(public_path() . '/seeds/countries.sql'));
        // Estados de Venezuela
        DB::unprepared(file_get_contents(public_path() . '/seeds/states.sql'));
        // Ciudades de Venezuela
        DB::unprepared(file_get_contents(public_path() . '/seeds/cities.sql'));
        // Parroquias de Venezuela
        DB::unprepared(file_get_contents(public_path() . '/seeds/parishes.sql'));

        $this->call(PermissionsTableSeeder::class);
        $this->call(SystemParametersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);        
    }
}
