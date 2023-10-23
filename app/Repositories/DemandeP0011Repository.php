<?php

namespace App\Repositories;
use App\Models\DemandeP0011;
use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandeP0011Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP0011::class;
    }

       // Exemple d'utilisation pour générer une chaîne de 8 caractères aléatoires :

       public function uploadFile(array $data, string $name){


        $this->unsetClauses();

     
    $de = new DemandeP0011();
    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();

        // $libelle = $data['libelle_court'];
        $libelle = 'demandeP0011';
        echo $libelle;
        $url = 'public/'.$libelle;
        Storage::makeDirectory($url);

        $path = $data[$name]->storeAs('public/'.$libelle, $fileName);

        return $path;
    }
}
