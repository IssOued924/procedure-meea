<?php

namespace App\Http\Controllers;

use App\Models\Plainte;
use Illuminate\Http\Request;

class PlainteController extends Controller
{
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
            'subject'=>'required',
            'message' => 'required'
         ]);

         //  Store data in database
        Plainte::create($request->all());

        return redirect('/')->with('success', 'Votre plainte à bien été soumise et en cours de traitement !!');
    }
}
