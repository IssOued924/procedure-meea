<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Repositories\RegionRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegionController extends Controller
{
    public $repository;
    public function __construct(RegionRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data = [
            "regions" => $this->repository->all(),
            // "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
        ];
        return view('backend.parametre.region_list', $data);
    }
        // Enregistrement des Regions

    public function store(Request $request, Region $region){
        $data = $request->all();

        $region = $this->repository->create($data);
        $region->save();

        Alert::success('Succès', 'La Region a été créee avec succès !');
        return redirect()->route('region-list')->with('success', 'La Region à été Enregistré avec succès !');

    }
            // Supression
    public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $region = Region::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$region) {
        return redirect()->route('region-list')->with('erreur', 'Region non trouvé');
    }

    // Supprimez l'enregistrement
    $region->delete();

    return redirect()->route('region-list')->with('success', 'Région supprimée avec succès');
}


}
