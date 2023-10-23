<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP004Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP004Repository $repository){
        $this->repository = $repository;
    }
}
