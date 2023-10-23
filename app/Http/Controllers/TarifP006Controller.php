<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP006Controller extends Controller
{
    public $repository;
    public function __construct(TarifP006Repository $repository){
        $this->repository = $repository;
    }
}
