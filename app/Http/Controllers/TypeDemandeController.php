<?php

namespace App\Http\Controllers;
use App\Repositories\TypeDemandeRepository;

use Illuminate\Http\Request;

class TypeDemandeController extends Controller
{
    public $repository;
    public function __construct(TypeDemandeRepository $repository){
        $this->repository = $repository;
    }
}
