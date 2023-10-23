<?php

namespace App\Repositories;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class BaseJuridiqueRepository.
 */
class ProfileRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Profile::class;
    }





}
