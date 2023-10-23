<?php

namespace App\Repositories;
use App\Models\DemandePieceP0011;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP0011Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP0011::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP0011();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p0011_id = $demandeId;
        $demande->save();
    }
}
