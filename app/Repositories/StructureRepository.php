<?php

namespace App\Repositories;
use App\Models\Structure;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class Structure.
 */
class StructureRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Structure::class;
    }

}
