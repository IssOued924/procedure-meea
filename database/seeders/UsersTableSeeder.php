<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Agent;
use App\Models\Usager;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agent = Agent::create([
            'matricule' => 'SORO Halilou',
            'nom' => 'Soro',
            'prenom' => 'Halilou',
            'fonction' => 'Informaticien',
            'service_id' => 'caa0d29c-2a76-4e2b-bb49-cbd88c7b9794',
        ]);
        $admin = User::create([
            'name' => 'SORO Halilou',
            'email' => 'ingitsoro@gmail.com',
            'password' => Hash::make('password!'),
            'agent_id' => $agent->uuid,
           // 'role_id' => 'ingitsoro@gmail.com',
        ]);
        $usager = Usager::create([
            'nom' => 'Nanema',
            'prenom' => 'Ed',
            'domicile' => 'Ouagadadougou',
            'telephone' => '70000000',
            'nom_entreprise'=> 'Pro SARL',
            'type_usager_id' => '8c471a95-520d-4dea-9305-67f3f6e4beea',
            'commune_origine_id' =>'ab073582-bcd6-4788-9e8b-503860346fc9',
            'commune_residence_id' => 'ab073582-bcd6-4788-9e8b-503860346fc9'
        ]);
        $user_usager = User::create([
            'name' => 'Pro SARL',
            'email' => 'usager@usager.com',
            'password' => Hash::make('password!'),
            'usager_id' => $usager->uuid
        ]);
        $admin = User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@meea.com',
            'password' => Hash::make('password!'),
            'agent_id' => 'd13d6f91-780c-49ae-8397-c471fac7b2',
            'role_id' => '5298df89-26e0-4a6f-a677-dfc70d833419',
            'must_reset_password' => 0,
        ]);
    }
}
