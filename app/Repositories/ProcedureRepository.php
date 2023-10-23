<?php

namespace App\Repositories;
use App\Models\Procedure;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProcedureRepository.
 */
class ProcedureRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Procedure::class;
    }
}
