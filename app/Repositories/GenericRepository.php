<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Support\Facades\DB;
//use Your Model

/**
 * Class GenericRepository.
 */
class GenericRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        //return YourModel::class;
    }

    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }

}
