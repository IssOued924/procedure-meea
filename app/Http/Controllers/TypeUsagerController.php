<?php

namespace App\Http\Controllers;

use App\Models\TypeUsager;
use App\Repositories\TypeUsagerRepository;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TypeUsagerController extends Controller
{
    public $repository;
    public function __construct(TypeUsagerRepository $repository){
        $this->repository = $repository;
    }

    public function index(){


        $data =  [
            "typeUsager" => $this->repository->all(),

        ];
        return view('backend.parametre.typeUsager_list', $data);


    }


    public function store(Request $request, TypeUsager $type){
        $data = $request->all();

        $type = $this->repository->create($data);
        $type->save();

        Alert::success('Succès', 'Type Usager   a été créee avec succès !');
        return redirect()->route('typeUsager-list')->with('success', 'Type Usager à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
    ]);

    $type = TypeUsager::find($uuid);
    $type->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
    ]);

    return redirect()->route('typeUsager-list')->with('success', 'Type Usager  mis à jour avec succès !');
}


            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $type = TypeUsager::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$type) {
        return redirect()->route('typeUsager-list')->with('erreur', 'Type  Usager non trouvé');
    }

    // Supprimez l'enregistrement
    $type->delete();

    return redirect()->route('typeUsager-list')->with('success', 'Type  Usager supprimée avec succès !');
}


}
