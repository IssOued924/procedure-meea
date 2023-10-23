<?php

namespace App\Repositories;
use App\Models\Region;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class RegionRepository.
 */
class RegionRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Region::class;
    }
}
