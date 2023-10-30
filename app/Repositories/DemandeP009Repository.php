<?php

namespace App\Repositories;
use App\Models\DemandeP009;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP009Repository.
 */
class DemandeP009Repository extends GenericRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP009::class;
    }



    public function uploadFile(array $data, string $name){

        $this->unsetClauses();

    $de = new DemandeP009();
    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();


        // $libelle = $data['libelle_court'];
        $libelle = 'demandeP009';
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
