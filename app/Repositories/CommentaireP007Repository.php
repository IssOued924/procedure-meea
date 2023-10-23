<?php

namespace App\Repositories;
use App\Models\CommentaireP007;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentaireRepository.
 */
class CommentaireP007Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return CommnentaireP007::class;
    }
}
