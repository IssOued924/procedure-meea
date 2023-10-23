<?php

namespace App\Http\Controllers;
use App\Repositories\TypeIdentiteRepository;

use Illuminate\Http\Request;

class TypeIdentiteController extends Controller
{
    public $repository;
    public function __construct(TypeIdentiteRepository $repository){
        $this->repository = $repository;
    }
}
