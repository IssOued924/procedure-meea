<?php

namespace App\Repositories;
use App\Models\DemandePieceP004;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP004Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP004::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP004();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p004_id = $demandeId;
        $demande->save();
    }

}
