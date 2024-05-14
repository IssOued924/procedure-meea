<?php

namespace App\Http\Controllers;

use App\Models\PieceJointe;
use App\Models\Procedure;
use App\Repositories\PieceJointeRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PieceJointeController extends Controller {

    public $repository;

    public function __construct(PieceJointeRepository $repository) {
        $this->repository = $repository;
    }

    public function index(Request $request) {
        $pieceJointes = $this->repository->all();
        $selectedProcedure = '';
        if (isset($request->procedure) && strlen($request->procedure) > 0) {
            $pieceJointes = $this->repository->all(array('procedure_piece_jointes.procedure_id' => $request->procedure));
            $selectedProcedure = $request->procedure;
        }
        $data = [
            "pieceJointes" => $pieceJointes,
            "procedures" => Procedure::all(),
            "selectedProcedure" => $selectedProcedure
        ];
        return view('backend.parametre.piecejointe_list', $data);
    }

    public function store(Request $request, PieceJointe $pieceJointe) {
        $data = $request->all();

        $id = $data['procedure_id'];
        $procedure = Procedure::where('uuid', $id)->first();

        unset($data['procedure_id']);
        unset($data['modele_fichier']);

        if ($request->file('modele_fichier')) {
            $data['modele_fichier'] = $this->repository->uploadFile($request->modele_fichier);
        }
        $pieceJointe = $this->repository->create($data);
        $pieceJointe->save();
        $procedure->pieceJointe()->attach($pieceJointe);

        // $piece = $this->repository->create($data);
        // $piece->save();

        Alert::success('Succès', 'La Piece Jointe a été créee avec succès !');
        return redirect()->route('piecejointe-list')->with('success', 'La Piece Jointe à été Enregistrée avec succès !');
    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid) {
        $request->validate([
            'libelle' => 'required',
            'montant' => 'required',
        ]);

        // $this->repository
        $data['libelle'] = $request->input('libelle');
        $data['montant'] = $request->input('montant');
        if ($request->file('modele_fichier')) {
            $data['modele_fichier'] = $this->repository->uploadFile($request->modele_fichier);
            @unlink(storage_path($request->current_file));
        }
        $piece = PieceJointe::find($uuid);
        $piece->update($data);
        $piece->save();

        return redirect()->route('piecejointe-list')->with('success', 'Piece Jointe  mis à jour avec succès !');
    }

    // Supression
    public function supprimer($uuid) {
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
