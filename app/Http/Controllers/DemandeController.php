<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Repositories\DemandeRepository;

class DemandeController extends Controller
{
    //
    public $repository;
    public function __construct(DemandeRepository $repository){
        $this->repository = $repository;
    }

    public function index(){
        return view('test');
    }

    public function store (Request $request, DemandeRepository $demandeRepository) {

       // $demande = new Demande();
        $this->repository->uploadFile($request->all());


       //dd($request->all());

        //Demande::create($request->all());
       // $repository->create($request->all());
    }


    public function testpj(){
        return view('testupload');
    }

}
