<?php

namespace App\Repositories;
use App\Models\DemandeP005;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP005Repository.
 */
class DemandeP005Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP005::class;
    }
    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }
}
