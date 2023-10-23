<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP001Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP001Repository $repository){
        $this->repository = $repository;
    }
}
