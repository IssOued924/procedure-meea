<?php

namespace App\Http\Controllers;

use App\Repositories\DemandePieceP009Repository;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP009Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP009Repository $repository){
        $this->repository = $repository;
    }
}
