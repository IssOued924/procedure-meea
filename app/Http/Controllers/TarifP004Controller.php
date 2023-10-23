<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP004Controller extends Controller
{
    public $repository;
    public function __construct(TarifP004Repository $repository){
        $this->repository = $repository;
    }
}
