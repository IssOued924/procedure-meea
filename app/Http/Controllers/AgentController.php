<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Role;
use App\Models\Service;
use App\Models\Structure;
use App\Repositories\AgentRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AgentController extends Controller
{
    public $repository;
    public function __construct(AgentRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "agents" => Agent::all(),//$this->repository->all(),
            "structures" => Structure::all(),
            "services" =>Service::all(),
            "roles" => Role::all(),

        ];
        return view('backend.utilisateur.agent_list', $data);
    }



    public function store(Request $request, Agent $agent){
        $data = $request->all();

        $agent = $this->repository->create($data);
        $agent->save();

        Alert::success('Succès', 'Agent   a été créee avec succès !');
        return redirect()->route('agent-list')->with('success', 'Agent à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'matricule' => 'required',
        'fonction' => 'required',
    ]);

    $agent = Agent::find($uuid);
    
    $agent->update([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'matricule' => $request->input('matricule'),
        'fonction' => $request->input('fonction'),
        'service_id' => $request->input('service_id'),
        'role_id' => $request->input('role_id'),
    ]);

    return redirect()->route('agent-list')->with('success', 'Agent  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $agent = Agent::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$agent) {
        return redirect()->route('agent-list')->with('erreur', 'Agent non trouvé');
    }

    // Supprimez l'enregistrement
    $agent->delete();

    return redirect()->route('agent-list')->with('success', 'Agent supprimée avec succès !');
}

}
