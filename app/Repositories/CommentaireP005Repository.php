<?php

namespace App\Repositories;
use App\Models\CommentaireP005;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentaireRepository.
 */
class CommentaireP005Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return CommnentaireP005::class;
    }
}
