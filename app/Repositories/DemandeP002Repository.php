<?php

namespace App\Repositories;
use App\Models\DemandeP002;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP002Repository.
 */
class DemandeP002Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP002::class;
    }
}
