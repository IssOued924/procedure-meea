<?php

namespace App\Http\Controllers;

use App\Models\Usager;
use App\Repositories\UsagerRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UsagerController extends Controller
{
    public $repository;
    public function __construct(UsagerRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "usagers" => $this->repository->all(),

        ];
        return view('backend.utilisateur.usager_list', $data);
    }


    public function store(Request $request, Usager $usager){
        $data = $request->all();

        $usager = $this->repository->create($data);
        $usager->save();

        Alert::success('Succès', ' Usager   a été créee avec succès !');
        return redirect()->route('usager-list')->with('success', ' Usager à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
    ]);

    $type = Usager::find($uuid);
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
    $type = Usager::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$type) {
        return redirect()->route('typeUsager-list')->with('erreur', 'Type  Usager non trouvé');
    }

    // Supprimez l'enregistrement
    $type->delete();

    return redirect()->route('typeUsager-list')->with('success', 'Type  Usager supprimée avec succès !');
}



}
