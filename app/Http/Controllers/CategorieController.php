<?php

namespace App\Http\Controllers;
use App\Repositories\CategorieRepository;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public $repository;
    public function __construct(CategorieRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "categories" => $this->repository->all(),

        ];
        return view('backend.parametre.categorie_list', $data);
    }
}
