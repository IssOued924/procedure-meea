<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP005Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP005Repository $repository){
        $this->repository = $repository;
    }
}
