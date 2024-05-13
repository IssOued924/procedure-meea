<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\FacturationRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\Procedure;
use App\Repositories\LogPaiementRepository;
class FacturationController extends Controller {

    public $repository;

    public function __construct(FacturationRepository $repository) {
        Carbon::setLocale("fr");
        $this->repository = $repository;
    }

    public function facturation(Request $request) {
        $facturationRepository = new FacturationRepository();
        $listeDirection=['DGEF','DGRE','DGPE'];
        $userDirection = Auth::user()->agent->service->libelle_court;
        $service_id = Auth::user()->agent->service->uuid;
        $procedures = Procedure::where('service_id', $service_id)->get();
        if(!in_array($userDirection, $listeDirection)){
            $procedures = Procedure::all();
        }
        
        $demandes = $facturationRepository->getAllDemandeToPay();
        $data['demandes'] = $demandes;
        $data['procedures'] = $procedures;
        $data['selectedProcedure'] = '';
        return view('backend.paiement.list_demande', $data);
    }

    public function detailDemande($process, $id_demande) {
        $demande = $this->repository->getDemandeByIdToPay($id_demande,$process);
        $data['demande'] = $demande;
        return view('backend.paiement.detail_demande', $data);
    }
    
    public function savePaiement(Request $request) {
        $logPaiementRepository = new LogPaiementRepository();
        $dataPaiement = [
            'ref_paiement' => $request->ref_paiement,
            'type_paiement' => 'Espèce',
            'date_paiement' => $request->date_paiement,
            'montant' => $request->montant,
            'demande_id' => $request->demande_id,
            'demande_id' => $request->demande_id,
            'code_procedure' => $request->code_procedure,
            'created_by' => Auth::user()->uuid,
            'updated_by' => Auth::user()->uuid,
            ];
       $paiement = $this->repository->create($dataPaiement);
       $paiement->save();
        /* Enregistrement de log*/
        if($paiement){
            /* Mise à jour de la table demande */
            $nbAffected = $this->repository->updateDemandeAfterPayment($request->demande_id, $request->code_procedure);
            $dataLog = [
            'montant' => $request->montant,
            'action' => 'Create',
            'paiement_id' => $paiement->uuid,
            'created_by' => Auth::user()->uuid,
            'updated_by' => Auth::user()->uuid,
            ];
            $log = $logPaiementRepository->create($dataLog);
            $log->save();
            return redirect()->back()->with('success', 'Paiement enregistré avec succès !');
        }else{
            return redirect()->back()->with('error', "L'enregistrement du paiement a échoué. Vueillez réessayer !");
        }
    }
    
    public function annulerPaiement(Request $request){
        $nbAffected = $this->repository->deletePaiement($request->demande_id, $request->procedure);
        return json_encode(array('status' => 'success'));
    }
    
    /* Liste des demandes par procedure */
    public function dossierByProcedure(Request $request) {
        $listeDirection=['DGEF','DGRE','DGPE'];
        $userDirection = Auth::user()->agent->service->libelle_court;
        $service_id = Auth::user()->agent->service->uuid;
        $procedures = Procedure::where('service_id', $service_id)->get();
        if(!in_array($userDirection, $listeDirection)){
            $procedures = Procedure::all();
        }
        $demandes = null;
        $facturationRepository = new FacturationRepository();
        if (isset($request->procedure) && strlen($request->procedure) > 0) {
            $demandes = $facturationRepository->getAllDemandeToPay(array('procedures.code' =>$request->procedure));
        }
        $data = [
            "demandes" => $demandes,
            'procedures'=> $procedures,
            "selectedProcedure" => $request->procedure,
        ];
        return view('backend.paiement.list_demande', $data);
    }
    
    /*Statistiques des paiement */
    public function situationPaiement(Request $request) {
        $from  ='';
        $to ='';
        $situations = $this->repository->getSituationByProcedure('','');
        if ((isset($request->from) && strlen($request->from) > 0) && (isset($request->to) && strlen($request->to) > 0)) {
            $situations = $this->repository->getSituationByProcedure($request->from,$request->to);
            $from =$request->from;
            $to =$request->to;
        }
        $data = [
            "situations" => $situations,
            "from" => $from,
            "to" => $to,
        ];
        return view('backend.paiement.statistique', $data);
    }
}
