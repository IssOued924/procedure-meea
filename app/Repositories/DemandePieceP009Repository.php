<?php

namespace App\Repositories;
use App\Models\DemandePieceP009;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP009Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP009::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP009();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p009_id = $demandeId;
        $demande->save();
    }
}
