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
class DemandeP006Repository extends AppRepository
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

        if ( isset($data[$name]) ){
            $demande = new demandeP006();

            /* DEBUT algorithme de renommage du fichier */
            $tt = $demande->genererRandomString(4);
            $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();
            /* FIN algorithme de renommage du fichier */

            /* DEBUT algorithme de détermination du repertoire parent du fichier */
            $libelle = 'demandeP006';
            $url = 'public/'.$libelle;
            Storage::makeDirectory($url);
            /* FIN algorithme de détermination du repertoire parent du fichier */

            // Stockage éffective du document avec le chemin et le nom de fichier déterminé ci-dessus
            $path = $data[$name]->storeAs('public/'.$libelle, $fileName);

            return $path;
        }
        return '';
    }

    public function all($filtre = array())
    {
        $this->newQuery()->eagerLoad();

        $models = $this->query->where($filtre)->get();

        $this->unsetClauses();

        return $models;

    }
}
