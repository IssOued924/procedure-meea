<?php

namespace App\Repositories;
use App\Models\LogPaiement;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class LogPaiementRepository.
 */
class LogPaiementRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return LogPaiement::class;
    }
}
