<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceP0010Repository;

use Illuminate\Http\Request;

class DemandePieceP0010Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP0010Repository $repository){
        $this->repository = $repository;
    }
}
