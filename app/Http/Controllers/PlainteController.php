<?php

namespace App\Http\Controllers;
use App\Repositories\PlainteRepository;
use Illuminate\Support\Facades\Auth;

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
            'procedure' => 'required',
            'subject'=>'required',
            'message' => 'required'
         ]);

         $plainte = new Plainte(); 
         $plainte->procedure = $request->procedure; 
         $plainte->subject = $request->subject; 
         $plainte->message = $request->message;
         $plainte->usager_id = Auth::user()->usager->uuid; // "5f1a4492-64fd-4219-a29e-48b1e3a7ab89" ;
         $plainte->save(); 

        // ou 
        // Plainte::create($request->all());

        return redirect('/')->with('success', 'Votre plainte à bien été soumise et est en cours de traitement !!');
    }




    // recuperation de la liste des plaintes
    public function listePlainte(Request $request){

         $listePlainte = Plainte::all();
        // $listePlainte = $this->repository->all();
                
        return view('/backend/list_plaintes', ['listePlainte' =>  $listePlainte ]);
   }



    // modifie l'etat d'une plainte
    public function editPlainte(Request $request, $id){

        $plainte = Plainte::find($id); 
		$plainte->etat = $request->etat;
		$plainte->user_id = Auth::user()->uuid; // "c98a27b7-c1ce-40e4-9914-6f2cc4fa1d30";
		$plainte->save();
        
        return redirect()->back()->with('success', 'Plainte modifier avec succes !');
   }
}
