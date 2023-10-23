<?php

namespace Database\Seeders;

use App\Models\Pays;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $csvFile = fopen(base_path("database/data/pays.csv"), "r");
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
            if (!$firstline) {
                Pays::create([
                    "code" => $data['0'],
                    "libelle" => $data['1']
                ]);    
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
