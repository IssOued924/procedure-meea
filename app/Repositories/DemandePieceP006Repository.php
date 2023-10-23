<?php

namespace App\Repositories;
use App\Models\DemandePieceP006;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP006Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP006::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP006();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p006_id = $demandeId;
        $demande->save();
    }
}
