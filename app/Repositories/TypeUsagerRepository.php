<?php

namespace App\Repositories;

use App\Models\TypeUsager;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TypeUsagerRepository.
 */
class TypeUsagerRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TypeUsager::class;
    }
}
