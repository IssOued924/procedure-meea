<?php

namespace App\Repositories;
use App\Models\Categorie;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CategorieRepository.
 */
class CategorieRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Categorie::class;
    }
}
