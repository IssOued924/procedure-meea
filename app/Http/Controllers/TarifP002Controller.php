<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP002Controller extends Controller
{
    public $repository;
    public function __construct(TarifP002Repository $repository){
        $this->repository = $repository;
    }
}
