<?php

namespace App\Repositories;
use App\Models\DemandeP005;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP005Repository.
 */
class DemandeP005Repository extends GenericRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP005::class;
    }

    public function all($filtre = array())
    {
        $this->newQuery()->eagerLoad();

        $models = $this->query->where($filtre)->get();

        $this->unsetClauses();

        return $models;

    }
}
