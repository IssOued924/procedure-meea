<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP0010Repository;

class DemandeP0010Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP0010Repository $repository){
        $this->repository = $repository;
    }
}
