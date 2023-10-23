<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Region;
use App\Repositories\ProvinceRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProvinceController extends Controller
{
    public $repository;
    public function __construct(ProvinceRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "provinces" => $this->repository->all(),
            "regions" => Region::all(),
        ];
        return view('backend.parametre.province_list', $data);
    }

    public function store(Request $request, Province $province){
        $data = $request->all();

        $province = $this->repository->create($data);
        $province->save();

        Alert::success('Succès', 'La Province a été créee avec succès !');
        return redirect()->route('province-list')->with('success', 'La Province à été Enregistré avec succès !');

    }
            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $province = Province::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$province) {
        return redirect()->route('province-list')->with('erreur', 'Province non trouvé');
    }

    // Supprimez l'enregistrement
    $province->delete();

    return redirect()->route('province-list')->with('success', 'Province supprimée avec succès');
}
}
