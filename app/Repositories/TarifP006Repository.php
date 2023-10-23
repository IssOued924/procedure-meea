<?php

namespace App\Repositories;
use App\Models\TarifP006;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TarifRepository.
 */
class TarifP006Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TarifP006::class;
    }
}
