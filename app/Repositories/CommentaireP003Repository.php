<?php

namespace App\Repositories;
use App\Models\CommentaireP003;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentaireRepository.
 */
class CommentaireP003Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return CommnentaireP003::class;
    }
}
