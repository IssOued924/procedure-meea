<?php

namespace App\Repositories;
use App\Models\TypeIdentite;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TypeIdentiteRepository.
 */
class TypeIdentiteRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return TypeIdentite::class;
    }
}
