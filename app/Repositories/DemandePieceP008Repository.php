<?php

namespace App\Repositories;
use App\Models\DemandePieceP008;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP008Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP008::class;
    }

    public function setChemin(string $chemin, string $demandeId, string $libelle) {
        if ( isset($chemin) && is_string($chemin) && !empty($chemin) ){
            $piece = new DemandePieceP008();
            $piece->chemin = $chemin;
            $piece->chemin = $libelle;
            $piece->demande_p008_id = $demandeId;
            $piece->save();
        }
    }
}
