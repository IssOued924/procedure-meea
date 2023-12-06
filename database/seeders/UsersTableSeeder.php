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
      /*  $agent = Agent::create([
            'matricule' => 'SORO Halilou',
            'nom' => 'Soro',
            'prenom' => 'Halilou',
            'fonction' => 'Informaticien',
            'service_id' => 'caa0d29c-2a76-4e2b-bb49-cbd88c7b9794',
        ]);*/
        $admin = User::create([
            'name' => 'Admin Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'agent_id' => '3fce48ca-f4e4-47c1-9253-ecadcc5a0475',
           'role_id' => 'dd82e467-0703-4928-8399-6ec4f8734965',
        ]);
       /* $usager = Usager::create([
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
            'password' => Hash::make('123'),
            'usager_id' => $usager->uuid
        ]);*/
    }
}
