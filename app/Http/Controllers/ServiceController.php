<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Structure;
use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public $repository;
    public function __construct(ServiceRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "services" => $this->repository->all(),
            "structures" =>Structure::all(),

        ];
        return view('backend.parametre.service_list', $data);
    }

    public function store(Request $request, Service $service){
        $data = $request->all();
        //dd($data);
        $service = $this->repository->create($data);
        $service->save();

        Alert::success('Succès', ' Service   a été créée avec succès !');
        return redirect()->route('service-list')->with('success', ' Service à été Enregistrée avec succès !');

    }

    // mise a jour de service juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
        'structure_id' => 'required',

    ]);

        // dd($request->structure_id);

    $type = Service::find($uuid);
    $type->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
        'structure_id' => $request->input('structure_id'),
    ]);

    return redirect()->route('service-list')->with('success', 'Service  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $type = Service::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$type) {
        return redirect()->route('service-list')->with('erreur', ' service non trouvé');
    }

    // Supprimez l'enregistrement
    $type->delete();

    return redirect()->route('service-list')->with('success', 'Service supprimée avec succès !');
}
}
