<?php

namespace App\Repositories;
use App\Models\Agent;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BaseJuridiqueRepository.
 */
class AgentRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Agent::class;
    }

    public function all(array $columns = ['*'])
    {
        return DB::table('agents')
                        ->join('services', 'services.uuid', '=', 'agents.service_id')
                        ->select('agents.*', 'services.libelle_long as service')
                        ->get();
    }



}
