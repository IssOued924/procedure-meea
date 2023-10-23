<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP002Repository;
class DemandeP002Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP002Repository $repository){
        $this->repository = $repository;
    }
}
