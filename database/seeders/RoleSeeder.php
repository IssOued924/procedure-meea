<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Role::create([
            "libelle" => "Gestionnaire",
            "code" =>"GRE",
            
        ]);
        //
        Role::create([
            "libelle" => "Reception",
            "code" =>"RCT",
            
        ]);

        //
        Role::create([
            "libelle" => "Etudes",
            "code" =>"ETDS",
            
        ]);
        //
        Role::create([
            "libelle" => "administration",
            "code" =>"ADMIN",
            
        ]);
    }
}
