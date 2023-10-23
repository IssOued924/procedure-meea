<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DemandeP005Repository;
class DemandeP005Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP005Repository $repository){
        $this->repository = $repository;
    }
}
