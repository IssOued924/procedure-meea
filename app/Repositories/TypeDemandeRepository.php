<?php

namespace App\Repositories;
use App\Models\TypeDemande;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TypeDemandeRepository.
 */
class TypeDemandeRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TypeDemande::class;
    }
}
