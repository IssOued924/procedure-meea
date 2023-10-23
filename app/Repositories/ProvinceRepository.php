<?php

namespace App\Repositories;
use App\Models\Province;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProvinceRepository.
 */
class ProvinceRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {

        return Province::class;
    }

    public function all(array $columns = ['*'])
    {
        return DB::table('provinces')
                        ->join('regions', 'provinces.region_id', '=', 'regions.uuid')
                        ->select('provinces.*', 'regions.libelle as region')
                        ->get();
    }
}
