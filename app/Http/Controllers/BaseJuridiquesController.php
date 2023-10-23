<?php

namespace App\Http\Controllers;

use App\Models\BaseJuridiques;
use App\Models\Procedure;
use App\Repositories\BaseJuridiqueRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BaseJuridiquesController extends Controller
{
    public $repository;
    public function __construct(BaseJuridiqueRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "basejuridiques" => $this->repository->all(),
            "procedures"=>Procedure::all(),

        ];
        return view('backend.parametre.basejuridique_list', $data);
    }

    public function store(Request $request, BaseJuridiques $basejuridique){
        $data = $request->all();
        $id = $data['procedure_id'];
         $procedure = Procedure::where('uuid',  $id)->first();

         unset($data['procedure_id']);
         $basejuridique = $this->repository->create($data);
         $basejuridique->save();
         $procedure->baseJuridique()->attach($basejuridique);

        Alert::success('Succès', 'La Base Juridique a été créee avec succès !');
        return redirect()->route('basejuridique-list')->with('success', 'La Base Juridique à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
    ]);

    $basejuridique = BaseJuridiques::find($uuid);
    $basejuridique->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
    ]);

    return redirect()->route('basejuridique-list')->with('success', 'Base Juridique  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $basejuridique = BaseJuridiques::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$basejuridique) {
        return redirect()->route('basejuridique-list')->with('erreur', 'BaseJuridique non trouvé');
    }

    // Supprimez l'enregistrement
    $basejuridique->delete();

    return redirect()->route('basejuridique-list')->with('success', 'Base Juridique supprimée avec succès !');
}
}
