<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\DemandeP008;
use App\Models\Procedure;
use App\Repositories\UserRepository;
use App\Repositories\UsagerRepository;
use App\Repositories\PaiementRepository;
use App\Repositories\DemandeP008Repository;
use App\Repositories\DemandePieceP008Repository;
use Illuminate\Support\Facades\DB;

class DemandeP008Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP008Repository $repository){
        $this->repository = $repository;
    }


    public function index(){
         return view('create');

    }

    public function create(){
        return view('livewire.Demandesp008.createDechets');
    }

    public function store(Request $request, UserRepository $userRepository, UsagerRepository $usagerRepository, DemandePieceP008Repository $demandePieceP008Repository, DemandeP008 $demande, PaiementRepository $paiementRepository ){
        $data =  $request->all();

        $validator = Validator::make($request->all(), [
            'doc_rccm' => 'required|file|max:5120', 
            'doc_arrete_faisabilite' => 'required|file|max:5120',
            'doc_avis_mairie' => 'required|file|max:5120',
            'doc_desc_technique' => 'required|file|max:5120',
            // 'doc_registre_tracabilite'  => 'required|file|max:5120',
            // 3072 correspond à 3 Mo (3 * 1024)
        ]);
    
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataFiles = $request->all();

        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['reference'] = $this->repository->generateReference('P001');
        $data['delai'] = Procedure::where(['code' => 'P008'])->first('delai')->delai;
        $data['paiement'] =1;
        $data['procedure_id'] = Procedure::where(['code' => 'P008'])->first('uuid')->uuid;

       $pay_moyen = $data['moyen'];
       $payResponse = $data['payResponse'];

       $numero = $data["telephone"];
       $code_otp = $data["code_otp"];

       unset($data['payResponse']);
       unset($data['telephone']);
       unset($data["numero"]);
       unset($data["moyen"]);
       unset($data["code_otp"]);
       unset($data["otp"]);

        /* DEBUT Mise-à-jour des infos pro de la société demandeuse */
        // $user = $userRepository->getById(Auth::user()->uuid);
        // $usager = $usagerRepository->getById($user->usager_id);
        // $usagerRepository->updateById($usager->uuid, array(
        //     'nom_entreprise'=> $request->beneficiaire,
        //     'siege_social'=> $request->siege_social,
        //     'boite_postale'=> $request->boite_postale,
        //     'adresse_bf'=> $request->adresse_beneficiaire,
        // ));
        /* FIN Mise-à-jour des infos pro de la société demandeuse */

        /* DEBUT enregistrement des pièce-jointes avec récupération de leur urls */
        $chemin_rccm =  $this->repository->uploadFile($dataFiles, 'doc_rccm');
        $chemin_faisabilite =  $this->repository->uploadFile($dataFiles, 'doc_arrete_faisabilite');
        $chemin_avis_mairie =  $this->repository->uploadFile($dataFiles, 'doc_avis_mairie');
        $chemin_desc_technique =  $this->repository->uploadFile($dataFiles, 'doc_desc_technique');
        $chemin_registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'doc_registre_tracabilite');
        /* FIN enregistrement des pièce-jointes avec récupération de leur urls */

        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */
        unset($data['activite']);
        unset($data['doc_rccm']);
        unset($data['doc_arrete_faisabilite']);
        unset($data['doc_avis_mairie']);
        unset($data['doc_desc_technique']);
        unset($data['doc_registre_tracabilite']);

        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */

        $demande = $this->repository->create($data);
        // $demande->usager_id = $user->usager_id;
        $demande->save();

        $resp_data = json_decode(json_encode(simplexml_load_string("<response>".$payResponse."</response>")));
        
        if ($pay_moyen == 1)
            $type_paiement = "OrangeMoney";
        if ($pay_moyen == 2)
            $type_paiement = "MoovMoney";
        

        $pay = [
            'numero' => $numero,
            'code_otp' => $code_otp,
            'ref_paiement'=>$resp_data->transID,
            'date_paiement'=>now(),
            'code_procedure'=> 'P004',
            'demande_id'=>$demande->uuid,
            'type_paiement'=>$type_paiement,
            'message'=>$payResponse,
            ];
        $paiement = $paiementRepository->create($pay);
        $paiement->save();

        /* DEBUT Mise-à-jour des pièce-jointes de sorte à retrouver la demande associée */
        $demandePieceP008Repository->setChemin ($chemin_rccm, $demande->uuid, 'RCCM');
        $demandePieceP008Repository->setChemin ($chemin_faisabilite, $demande->uuid, 'Arreter de faisabilité');
        $demandePieceP008Repository->setChemin ($chemin_avis_mairie, $demande->uuid, 'Avis Mairie');
        $demandePieceP008Repository->setChemin ($chemin_desc_technique, $demande->uuid,'Description Technique');
        $demandePieceP008Repository->setChemin ($chemin_registre_tracabilite, $demande->uuid, 'Registre tracabilité');
        /* FIN Mise-à-jour des pièce-jointes de sorte à retrouver la demande associée */

        return redirect('/demandes-lists?procedure=AGDS')->with('success', 'Votre Demande à bien été Soumise !!');
    }

        // modification
    public function update(Request $request, UserRepository $userRepository, UsagerRepository $usagerRepository, DemandePieceP008Repository $demandePieceP008Repository, DemandeP008 $demande ){
        $data =  $request->all();
        $dataFiles = $request->all();

        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['delai'] = Procedure::where(['code' => 'P008'])->first('delai')->delai;



        /* DEBUT Mise-à-jour des infos pro de la société demandeuse */
        // $user = $userRepository->getById(Auth::user()->uuid);
        // $usager = $usagerRepository->getById($user->usager_id);
        // $usagerRepository->updateById($usager->uuid, array(
        //     'nom_entreprise'=> $request->beneficiaire,
        //     'siege_social'=> $request->siege_social,
        //     'boite_postale'=> $request->boite_postale,
        //     'adresse_bf'=> $request->adresse_beneficiaire,
        // ));
        /* FIN Mise-à-jour des infos pro de la société demandeuse */

        /* DEBUT enregistrement des pièce-jointes avec récupération de leur urls */


        /* FIN enregistrement des pièce-jointes avec récupération de leur urls */

        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */
        unset($data['activite']);
        unset($data['siege_social']);
        unset($data['boite_postale']);
        unset($data['doc_rccm']);
        unset($data['doc_arrete_faisabilite']);
        unset($data['doc_avis_mairie']);
        unset($data['doc_desc_technique']);
        unset($data['doc_registre_tracabilite']);

        unset($data['current_doc_rccm']);
        unset($data['current_doc_arrete_faisabilite']);
        unset($data['current_doc_avis_mairie']);
        unset($data['current_doc_desc_technique']);
        unset($data['current_doc_registre_tracabilite']);


        /* Debut détatchement des variables n'apparaissant pas directement dans la table DemandeP008 */

        // $demande->usager_id = $user->usager_id;
        $this->repository->updateById($request->uuid, $data);
        $demande = $this->repository->getById($request->uuid);

          //Recuperation du chemin des fichiers joint
          if ($request->file('doc_rccm')) {
            $chemin_rccm =  $this->repository->uploadFile($dataFiles, 'doc_rccm');
            $demandePieceP008Repository->setChemin ($chemin_rccm, $demande->uuid, 'RCCM');
             DB::table('demande_piece_p008_s')->where('chemin',  $request->current_doc_rccm)->delete();
             @unlink($request->current_doc_rccm);
         }

         if ($request->file('doc_arrete_faisabilite')) {
            $chemin_faisabilite =  $this->repository->uploadFile($dataFiles, 'doc_arrete_faisabilite');
            $demandePieceP008Repository->setChemin ($chemin_faisabilite, $demande->uuid, 'Arreter de faisabilité');
             DB::table('demande_piece_p008_s')->where('chemin',  $request->current_doc_arrete_faisabilite)->delete();
             @unlink($request->current_doc_arrete_faisabilite);
         }

         if ($request->file('doc_avis_mairie')) {
            $chemin_avis_mairie =  $this->repository->uploadFile($dataFiles, 'doc_avis_mairie');
            $demandePieceP008Repository->setChemin ($chemin_avis_mairie, $demande->uuid, 'Avis Mairie');
             DB::table('demande_piece_p008_s')->where('chemin',  $request->current_doc_avis_mairie)->delete();
             @unlink($request->current_doc_avis_mairie);
         }

         if ($request->file('doc_desc_technique')) {
            $chemin_desc_technique =  $this->repository->uploadFile($dataFiles, 'doc_desc_technique');
            $demandePieceP008Repository->setChemin ($chemin_desc_technique, $demande->uuid,'Description Technique');
             DB::table('demande_piece_p008_s')->where('chemin',  $request->current_doc_desc_technique)->delete();
             @unlink($request->current_doc_desc_technique);
         }

         if ($request->file('doc_registre_tracabilite')) {
            $chemin_registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'doc_registre_tracabilite');
            $demandePieceP008Repository->setChemin ($chemin_registre_tracabilite, $demande->uuid, 'Registre tracabilité');
             DB::table('demande_piece_p008_s')->where('chemin',  $request->current_doc_registre_tracabilite)->delete();
             @unlink($request->current_doc_registre_tracabilite);
         }

        return redirect('/demandes-lists?procedure=AGDS')->with('success', 'Votre Demande à bien été Modifiée  et en cours de traitement !!');
    }
}
