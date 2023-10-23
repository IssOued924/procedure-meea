<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP003Controller extends Controller
{
    public $repository;
    public function __construct(TarifP003Repository $repository){
        $this->repository = $repository;
    }
}
