<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP007Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP007Repository $repository){
        $this->repository = $repository;
    }
}
