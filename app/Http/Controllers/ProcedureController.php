<?php

namespace App\Http\Controllers;

use App\Models\Procedure;
use App\Repositories\ProcedureRepository;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProcedureController extends Controller
{
    public $repository;
    public function __construct(ProcedureRepository $repository){
        $this->repository = $repository;
    }


    public function index(){

        $data =  [
            "procedures" => $this->repository->all(),

        ];
        return view('backend.parametre.procedure_list', $data);
    }


    public function store(Request $request, Procedure $proc){
        $data = $request->all();

        $proc = $this->repository->create($data);
        $proc->save();

        Alert::success('Succès', 'Procedure   a été créee avec succès !');
        return redirect()->route('procedure-list')->with('success', 'Procedure à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
        'description' => 'required',
        'delai' => 'required',
        'tarif' => 'required',
    ]);

    $type = Procedure::find($uuid);
    $type->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
        'description' => $request->input('description'),
        'delai' => $request->input('delai'),
        'tarif' => $request->input('tarif'),
    ]);

    return redirect()->route('procedure-list')->with('success', ' Procedure  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $type = Procedure::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$type) {
        return redirect()->route('procedure-list')->with('erreur', 'Procedure non trouvé');
    }

    // Supprimez l'enregistrement
    $type->delete();

    return redirect()->route('procedure-list')->with('success', 'Procedure    supprimée avec succès !');
}


}
