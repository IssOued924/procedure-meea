<?php

namespace Database\Seeders;
use App\Models\DemandeDomaineP002;
use App\Models\DemandeCategorieP002;
use App\Models\DemandeSousDomaineP002;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AgremenTechniqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domaineAEP = DemandeDomaineP002::create([
            'libelle_court' => 'AEP',
            'libelle_long' => 'Approvisionnement en Eau Potable'
        ]);
        $domaineAEUE = DemandeDomaineP002::create([
            'libelle_court' => 'AEUE',
            'libelle_long' => 'Assainissement des Eaux Usées et Excréta'
        ]);
        $domaineBAHA = DemandeDomaineP002::create([
            'libelle_court' => 'BAHA',
            'libelle_long' => 'Barrage et Aménagement Hydro-Agricole'
        ]);
        $categorieTravaux = DemandeCategorieP002::create([
            'libelle_court' => 'Travaux',
            'libelle_long' => 'Travaux'
        ]);
        $categorieEtude = DemandeCategorieP002::create([
            'libelle_court' => 'Etudes et contrôle',
            'libelle_long' => 'Etudes et contrôle'
        ]);
        
        // Insertion des sous domaines en focntion des domaines et catégories
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fa1',
            'libelle_long' => 'Fa1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fa2',
            'libelle_long' => 'Fa2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fa3',
            'libelle_long' => 'Fa3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fd1',
            'libelle_long' => 'Fd1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fd2',
            'libelle_long' => 'Fd2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fd3',
            'libelle_long' => 'Fd3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fn1',
            'libelle_long' => 'Fn1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fn2',
            'libelle_long' => 'Fn2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fn3',
            'libelle_long' => 'Fn3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'P1',
            'libelle_long' => 'P1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'P2',
            'libelle_long' => 'P2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'P3',
            'libelle_long' => 'P3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'U1',
            'libelle_long' => 'U1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'U2',
            'libelle_long' => 'U2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'U3',
            'libelle_long' => 'U3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fe1',
            'libelle_long' => 'Fe1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fe2',
            'libelle_long' => 'Fe2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fs1',
            'libelle_long' => 'Fs1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fs2',
            'libelle_long' => 'Fs2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fs3',
            'libelle_long' => 'Fs3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fi1',
            'libelle_long' => 'Fi1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fi2',
            'libelle_long' => 'Fi2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fi3',
            'libelle_long' => 'Fi3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fi4',
            'libelle_long' => 'Fi4',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fc1',
            'libelle_long' => 'Fc1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fc2',
            'libelle_long' => 'Fc2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fc3',
            'libelle_long' => 'Fc3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fsic1',
            'libelle_long' => 'Fsic1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fsic2',
            'libelle_long' => 'Fsic2',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Fsic3',
            'libelle_long' => 'Fsic3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Eu1',
            'libelle_long' => 'Eu1',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Eu2',
            'libelle_long' => 'Eu12',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Eu3',
            'libelle_long' => 'Eu3',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Eu4',
            'libelle_long' => 'Eu4',
            'demande_domaine_p002_id' => $domaineAEP->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Lp',
            'libelle_long' => 'Lp',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'R1',
            'libelle_long' => 'R1',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'R2',
            'libelle_long' => 'R2',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'R3',
            'libelle_long' => 'R3',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Ac',
            'libelle_long' => 'Ac',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Aac',
            'libelle_long' => 'Aac',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'Ap',
            'libelle_long' => 'Ap',
            'demande_domaine_p002_id' => $domaineAEUE->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        
        DemandeSousDomaineP002::create([
            'libelle_court' => 'TA',
            'libelle_long' => 'TA',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'TB',
            'libelle_long' => 'TB',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'TC',
            'libelle_long' => 'TC',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'TD',
            'libelle_long' => 'TD',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'TE',
            'libelle_long' => 'TE',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieTravaux->uuid
        ]);
        
        DemandeSousDomaineP002::create([
            'libelle_court' => 'EA',
            'libelle_long' => 'EA',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'EB',
            'libelle_long' => 'EB',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'EC',
            'libelle_long' => 'EC',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'ED',
            'libelle_long' => 'ED',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
        DemandeSousDomaineP002::create([
            'libelle_court' => 'EE',
            'libelle_long' => 'EE',
            'demande_domaine_p002_id' => $domaineBAHA->uuid,
            'demande_categorie_p002_id' => $categorieEtude->uuid
        ]);
    }
}
