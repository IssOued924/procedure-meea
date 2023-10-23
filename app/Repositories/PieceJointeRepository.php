<?php

namespace App\Repositories;
use App\Models\PieceJointe;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class PieceJointeRepository.
 */
class PieceJointeRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return PieceJointe::class;
    }

    
}
