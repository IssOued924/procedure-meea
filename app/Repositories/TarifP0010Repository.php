<?php

namespace App\Repositories;
use App\Models\TarifP0010;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TarifRepository.
 */
class TarifP0010Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TarifP0010::class;
    }
}
