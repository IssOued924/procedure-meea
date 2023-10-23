<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP005Controller extends Controller
{
    public $repository;
    public function __construct(TarifP005Repository $repository){
        $this->repository = $repository;
    }
}
