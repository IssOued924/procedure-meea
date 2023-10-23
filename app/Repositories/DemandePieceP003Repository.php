<?php

namespace App\Repositories;
use App\Models\DemandePieceP003;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP003Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP003::class;
    }

    public function setChemin(string $chemin, string $demandeId,$libelle) {
        $demande = new DemandePieceP003();
        $demande->chemin = $chemin;
        $demande->libelle = $libelle;
        $demande->demande_p003_id = $demandeId;
        $demande->save();
    }
}
