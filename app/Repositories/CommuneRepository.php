<?php

namespace App\Repositories;
use App\Models\Commune;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class CommuneRepository.
 */
class CommuneRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Commune::class;
    }
    public function all(array $columns = ['*'])
    {
        return DB::table('communes')
                        ->join('provinces', 'provinces.uuid', '=', 'communes.province_id')
                        ->join('regions', 'provinces.region_id', '=', 'regions.uuid')
                        ->select('communes.*', 'provinces.libelle as province', 'regions.libelle as region')
                        ->get();
    }


}
