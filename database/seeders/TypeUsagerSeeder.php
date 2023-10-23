<?php

namespace Database\Seeders;

use App\Models\Pays;
use App\Models\TypeUsager;
use Illuminate\Database\Seeder;

class TypeUsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeUsager::create([
            "libelle_court" => "PM",
            "libelle_long" => "Personne morale"
        ]);
        TypeUsager::create([
            "libelle_court" => "PP",
            "libelle_long" => "Personne physique"
        ]);
    }
}
