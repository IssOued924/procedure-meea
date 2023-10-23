<?php

namespace App\Repositories;
use App\Models\CommentaireP009;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentaireRepository.
 */
class CommentaireP009Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return CommnentaireP009::class;
    }
}
