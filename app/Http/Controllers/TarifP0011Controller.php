<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP0011Controller extends Controller
{
    public $repository;
    public function __construct(TarifP0011Repository $repository){
        $this->repository = $repository;
    }
}
