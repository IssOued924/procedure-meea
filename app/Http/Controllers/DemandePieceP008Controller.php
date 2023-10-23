<?php

namespace App\Http\Controllers;
use App\Repositories\DemandePieceRepository;

use Illuminate\Http\Request;

class DemandePieceP008Controller extends Controller
{
    public $repository;
    public function __construct(DemandePieceP008Repository $repository){
        $this->repository = $repository;
    }
}
