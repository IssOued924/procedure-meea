<?php

namespace App\Repositories;
use App\Models\DemandeP0010;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0010Repository.
 */
class DemandeP0010Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP0010::class;
    }
}
