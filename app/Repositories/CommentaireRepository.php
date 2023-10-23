<?php

namespace App\Repositories;
use App\Models\Commentaire;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommentaireRepository.
 */
class CommentaireRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Commnentaire::class;
    }
}
