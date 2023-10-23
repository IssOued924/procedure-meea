<?php

namespace App\Repositories;

use App\Models\Role;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class TypeUsagerRepository.
 */
class RoleRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Role::class;
    }
}
