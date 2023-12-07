<?php

namespace App\Http\Controllers;
use App\Repositories\PlainteRepository;


use App\Models\Plainte;
use Illuminate\Http\Request;

class PlainteController extends Controller
{

    public $repository;
    public function __construct(PlainteRepository $repository)
    {
        $this->repository = $repository;
    }


    //
    public function plainteForm(){
        return view("plainte");
    }


    public function plainteStore(Request $request){
         // Form validation
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'category' => 'required',
            'subject'=>'required',
            'message' => 'required'
         ]);

        Plainte::create($request->all());

        return redirect('/')->with('success', 'Votre plainte à bien été soumise et est en cours de traitement !!');
    }




    // recuperation de la liste des plaintes
    public function listePlainte(Request $request){

         $listePlainte = Plainte::all();
        // $listePlainte = $this->repository->all();
        

        // dd($listePlainte);
        
        return view('/backend/list_plaintes', ['listePlainte' =>  $listePlainte ]);
   }



    // modifie l'etat d'une plainte
    public function editPlainte(Request $request, $id){

        $plainte = Plainte::find($id); 
		$plainte->etat = $request->etat;
		$plainte->user_id = "c98a27b7-c1ce-40e4-9914-6f2cc4fa1d30";
		$plainte->save();
        
        return redirect()->back()->with('success', 'Plainte modifier avec succes !');
   }
}
