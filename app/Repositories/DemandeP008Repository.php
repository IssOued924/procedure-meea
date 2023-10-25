<?php

namespace App\Repositories;

use App\Models\DemandeP008;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
//use Your Model

/**
 * Class DemandeP008Repository.
 */
class DemandeP008Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP008::class;
    }

    public function uploadFile(array $data, string $name){
        
        $this->unsetClauses();
        
        if ( isset($data[$name]) ){
            $demande = new DemandeP008();

            /* DEBUT algorithme de renommage du fichier */
            $tt = $demande->genererRandomString(4);
            $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();
            /* FIN algorithme de renommage du fichier */

            /* DEBUT algorithme de détermination du repertoire parent du fichier */
            $libelle = 'demandeP008';
            $url = 'public/'.$libelle;
            Storage::makeDirectory($url);
            /* FIN algorithme de détermination du repertoire parent du fichier */

            // Stockage éffective du document avec le chemin et le nom de fichier déterminé ci-dessus
            $path = $data[$name]->storeAs('public/'.$libelle, $fileName);

            return $path;
        }
        return '';
    }
    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }
}
