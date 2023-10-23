<?php

namespace App\Repositories;
use App\Models\TarifP0011;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TarifRepository.
 */
class TarifP0011Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TarifP0011::class;
    }
}
