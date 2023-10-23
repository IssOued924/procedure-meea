<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\Province;
use App\Models\Region;
use App\Repositories\CommuneRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommuneController extends Controller
{
    public $repository;
    public function __construct(CommuneRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "communes" => $this->repository->all(),
            "provinces" => Province::all(),
            "regions" => Region::all(),

        ];
        return view('backend.parametre.commune_list', $data);
    }


    public function store(Request $request, Commune $commune){
        $data = $request->all();

        $prcommune = $this->repository->create($data);
        $prcommune->save();

        Alert::success('Succès', 'La Commune a été créee avec succès !');
        return redirect()->route('commune-list')->with('success', 'La Commune à été Enregistré avec succès !');

    }
            // Supression
    public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $prcommune = Commune::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$prcommune) {
        return redirect()->route('commune-list')->with('erreur', '[Commune] non trouvé');
    }

    // Supprimez l'enregistrement
    $prcommune->delete();

    return redirect()->route('commune-list')->with('success', 'Commune supprimée avec succès');
}
}
