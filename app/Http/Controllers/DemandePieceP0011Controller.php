<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceP0011Repository;

use Illuminate\Http\Request;

class DemandePieceP0010Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP0011Repository $repository){
        $this->repository = $repository;
    }
}
