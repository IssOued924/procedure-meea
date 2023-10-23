<?php

namespace App\Repositories;
use App\Models\DemandePieceP002;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0011Repository.
 */
class DemandePieceP002Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandePieceP002::class;
    }
}
