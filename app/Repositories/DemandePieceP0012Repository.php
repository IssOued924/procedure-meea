<?php

namespace App\Repositories;

use App\Models\Demande;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use App\Models\DemandePieceP0012;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0012Repository.
 */
class DemandePieceP0012Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP0012::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP0012();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p0012_id = $demandeId;
        $demande->save();
    }
}
