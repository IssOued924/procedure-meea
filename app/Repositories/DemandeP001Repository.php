<?php

namespace App\Repositories;
use App\Models\DemandeP001;
use Faker\Core\File;
use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Support\Facades\DB;
//use Your Model

/**
 * Class DemandeP002Repository.
 */
class DemandeP001Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP001::class;
    }




    // Exemple d'utilisation pour générer une chaîne de 8 caractères aléatoires :

    public function uploadFile(array $data, string $name){


        $this->unsetClauses();

        // session()->flash('status', 'Post successfully updated.');
    //    $files = array();
    //    $files[] = $data['rccm'];
    //    $files[] = $data['facture_pro_format'];
    //    $files[] = $data['fiche_securite'];
    //    $files[] = $data['registre_tracabilite'];
    //    $files[] = $data['registre_dechet'];
    //    $files[] = $data['attestation_destination_finale'];
    $de = new DemandeP001();
    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();

        // $libelle = $data['libelle_court'];
        $libelle = 'demandeP001';
        echo $libelle;
        $url = 'public/'.$libelle;
        Storage::makeDirectory($url);

        $path = $data[$name]->storeAs('public/'.$libelle, $fileName);

        return $path;
    }
    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }

}
