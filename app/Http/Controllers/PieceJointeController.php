<?php

namespace App\Http\Controllers;

use App\Models\PieceJointe;
use App\Models\Procedure;
use App\Repositories\PieceJointeRepository;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PieceJointeController extends Controller
{
    public $repository;
    public function __construct(PieceJointeRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "pieceJointes" => $this->repository->all(),
            "procedures" =>Procedure::all(),

        ];
        return view('backend.parametre.piecejointe_list', $data);
    }

    public function store(Request $request, PieceJointe $pieceJointe){
        $data = $request->all();

        $id = $data['procedure_id'];
        $procedure = Procedure::where('uuid',  $id)->first();

        unset($data['procedure_id']);
        $pieceJointe = $this->repository->create($data);
        $pieceJointe->save();
        $procedure->pieceJointe()->attach($pieceJointe);

        // $piece = $this->repository->create($data);
        // $piece->save();

        Alert::success('Succès', 'La Piece Jointe a été créee avec succès !');
        return redirect()->route('piecejointe-list')->with('success', 'La Piece Jointe à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle' => 'required',
        'montant' => 'required',
    ]);

    // $this->repository

    $piece = PieceJointe::find($uuid);
    $piece->update([
        'libelle' => $request->input('libelle'),
        'montant' => $request->input('montant'),
    ]);

    $piece->save();

    return redirect()->route('piecejointe-list')->with('success', 'Piece Jointe  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $piece = PieceJointe::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$piece) {
        return redirect()->route('piecejointe-list')->with('erreur', 'Piece Jointe non trouvé');
    }

    // Supprimez l'enregistrement
    $piece->delete();

    return redirect()->route('piecejointe-list')->with('success', 'Piece Jointe supprimée avec succès !');
}


}
