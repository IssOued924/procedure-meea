<?php

namespace App\Repositories;
use App\Models\BaseJuridiques;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BaseJuridiqueRepository.
 */
class BaseJuridiqueRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return BaseJuridiques::class;
    }

}
