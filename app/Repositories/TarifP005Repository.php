<?php

namespace App\Repositories;
use App\Models\TarifP005;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TarifRepository.
 */
class TarifP005Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TarifP005::class;
    }
}
