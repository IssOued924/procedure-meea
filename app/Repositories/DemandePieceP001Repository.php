<?php

namespace App\Repositories;

use App\Models\Demande;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP001Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP001::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP001();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p001_id = $demandeId;
        $demande->save();
    }
}
