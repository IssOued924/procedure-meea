<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP003Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP003Repository $repository){
        $this->repository = $repository;
    }
}
