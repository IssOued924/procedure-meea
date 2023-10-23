<?php

namespace App\Repositories;
use App\Models\DemandePieceP007;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP007Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP007::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP007();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p007_id = $demandeId;
        $demande->save();
    }
}
