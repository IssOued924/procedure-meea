<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP0011Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP0011Repository $repository){
        $this->repository = $repository;
    }
}
