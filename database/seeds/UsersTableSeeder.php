<?php

use App\Constants\SystemMasterParameters;
use App\SystemParameter;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $document_type = SystemParameter::whereSubgroup(SystemMasterParameters::PEOPLE_DOCUMENTS)
                         ->inRandomOrder()
                         ->first()
                         ->id ?? null;

        $user_type = SystemParameter::whereGroup(SystemMasterParameters::TYPES_OF_USERS)
                     ->whereDescription('Usuario interno')
                     ->first()
                     ->id ?? null;

        // Usuario cliente
        $user = new User();
        $user->name = 'Súper';
        $user->lastname = 'Administrador';
        $user->email = 'admin@ventasg.com.ve';
        $user->username = 'admin';
        $user->mobile_phone = '0412-1234567';
        $user->document_type = $document_type;
        $user->document_number = "00000001";
        $user->user_type = $user_type;
        $user->password = '123456';
        $user->active = true;
        $user->save();
        
        $user->assignRole('Administrador');
    }
}
