<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP006Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP006Repository $repository){
        $this->repository = $repository;
    }

    
}
