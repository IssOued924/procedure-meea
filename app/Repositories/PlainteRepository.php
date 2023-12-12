<?php

namespace App\Repositories;

use App\Models\Plainte;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PlainteRepository.
 */
class PlainteRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Plainte::class;
    }
}
