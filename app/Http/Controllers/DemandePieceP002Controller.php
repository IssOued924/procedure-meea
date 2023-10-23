<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP002Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP002Repository $repository){
        $this->repository = $repository;
    }
}
