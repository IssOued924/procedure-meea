<?php

namespace App\Repositories;
use App\Models\DemandeP0010;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeP0010Repository.
 */
class DemandeP0010Repository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return DemandeP0010::class;
    }
    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }
}
