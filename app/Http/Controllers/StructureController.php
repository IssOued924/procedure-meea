<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use App\Repositories\StructureRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StructureController extends Controller
{
    public $repository;
    public function __construct(StructureRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "structures" => $this->repository->all(),

        ];
        return view('backend.parametre.structure_list', $data);
    }

    public function store(Request $request, Structure $structure){
        $data = $request->all();

        $structure = $this->repository->create($data);
        $structure->save();

        Alert::success('Succès', 'La Structure a été créee avec succès !');
        return redirect()->route('structure-list')->with('success', 'La Structure à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
    ]);

    $structure = Structure::find($uuid);
    $structure->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
    ]);

    return redirect()->route('structure-list')->with('success', 'Structure  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $structure = Structure::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$structure) {
        return redirect()->route('basejuridique-list')->with('erreur', 'BaseJuridique non trouvé');
    }

    // Supprimez l'enregistrement
    $structure->delete();

    return redirect()->route('structure-list')->with('success', 'Strucure supprimée avec succès !');
}
}
