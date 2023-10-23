<?php

namespace App\Repositories;
use App\Models\Usager;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BaseJuridiqueRepository.
 */
class UsagerRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Usager::class;
    }

    public function all(array $columns = ['*'])
    {
        return DB::table('usagers')
                        ->join('type_usagers', 'type_usagers.uuid', '=', 'usagers.type_usager_id')
                        ->leftJoin('communes as com_origine', 'com_origine.uuid', '=', 'usagers.commune_origine_id')
                        ->leftJoin('communes as com_residence', 'com_residence.uuid', '=', 'usagers.commune_residence_id')
                        ->leftJoin('users', 'users.usager_id', '=', 'usagers.uuid')
                        ->leftJoin('type_identites', 'type_identites.uuid', '=', 'usagers.type_identite_id')
                        ->select('usagers.*', 'type_usagers.libelle_long as type_usager',
                        'com_origine.libelle as commune_origine',
                        'com_residence.libelle as commune_residence',
                        'users.email', 'type_identites.libelle_long as type_identite')
                        ->get();
    }



}
