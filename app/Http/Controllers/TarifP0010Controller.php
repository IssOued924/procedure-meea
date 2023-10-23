<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP0010Controller extends Controller
{
    public $repository;
    public function __construct(TarifP0010Repository $repository){
        $this->repository = $repository;
    }
}
