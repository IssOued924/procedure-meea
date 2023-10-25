<?php

namespace App\Repositories;
use App\Models\DemandeP006;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP006Repository.
 */
class DemandeP006Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP006::class;
    }

    public function uploadFile(array $data, string $name){

        $this->unsetClauses();

    $de = new DemandeP006();
    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();


        // $libelle = $data['libelle_court'];
        $libelle = 'demandeP006';
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
