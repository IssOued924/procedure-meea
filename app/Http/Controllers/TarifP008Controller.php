<?php

namespace App\Http\Controllers;
use App\Repositories\TarifRepository;

use Illuminate\Http\Request;

class TarifP008Controller extends Controller
{
    public $repository;
    public function __construct(TarifP008Repository $repository){
        $this->repository = $repository;
    }
}
