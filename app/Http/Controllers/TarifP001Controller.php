<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP001Controller extends Controller
{
    public $repository;
    public function __construct(TarifP001Repository $repository){
        $this->repository = $repository;
    }
}
