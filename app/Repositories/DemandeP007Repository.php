<?php

namespace App\Repositories;
use App\Models\DemandeP007;
use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP007Repository.
 */
class DemandeP007Repository extends GenericRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP007::class;
    }



    public function uploadFile(array $data, string $name){

        $this->unsetClauses();

    $de = new DemandeP007();
    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();


        // $libelle = $data['libelle_court'];
        $libelle = 'demandeP007';
        echo $libelle;
        $url = 'public/'.$libelle;
        Storage::makeDirectory($url);



        $path = $data[$name]->storeAs('public/'.$libelle, $fileName);

        return $path;
    }
    public function all($filtre = array())
    {
        $this->newQuery()->eagerLoad();

        $models = $this->query->where($filtre)->get();

        $this->unsetClauses();

        return $models;
    }
}
