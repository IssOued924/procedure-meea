<?php

namespace App\Repositories;
use App\Models\TarifP009;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TarifRepository.
 */
class TarifP009Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TarifP009::class;
    }
}
