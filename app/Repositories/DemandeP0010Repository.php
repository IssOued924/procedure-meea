<?php

namespace App\Repositories;
use App\Models\DemandeP0010;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0010Repository.
 */
class DemandeP0010Repository extends GenericRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP0010::class;
    }
    public function all($filtre = array())
    {
        $this->newQuery()->eagerLoad();

        $models = $this->query->where($filtre)->get();

        $this->unsetClauses();

        return $models;
    }
}
