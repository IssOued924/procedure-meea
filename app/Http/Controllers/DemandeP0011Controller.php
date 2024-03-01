<?php

namespace App\Http\Controllers;

use App\Models\DemandeP0011;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP0011Repository;
use App\Repositories\DemandePieceP0011Repository;
use App\Repositories\PaiementRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DemandeP0011Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP0011Repository $repository){
        $this->repository = $repository;
    }


    public function index()
    {
        return view('create');
    }

    public function create()
    {

        // $data["commune"] = Commune::all();
        // dd($data["commune"]);
        return view('livewire.Demandesp0011.create');
    }

    public function store(Request $request, UserRepository $userRepository, DemandePieceP0011Repository $demandePieceP0011Repository, DemandeP0011 $demande, PaiementRepository $paiementRepository)
    {

        $data =  $request->all();
          
        $validator = Validator::make($request->all(), [
            'cnib' => 'required|file|max:5120', 
          
            'protocole_daccord' => 'required|file|max:5120',
            'agrement' => 'required|file|max:5120',
            'quitance' =>  'required|file|max:5120',
            // 3072 correspond à 3 Mo (3 * 1024)
        ]);
        
    
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dataFiles = $request->all();
        //dd($data['exploitant']);
        $pay_moyen = $data['moyen'];
        $payResponse = $data['payResponse'];

        $numero = $data["telephone"];
        $code_otp = $data["code_otp"];

        unset($data['payResponse']);
        unset($data['telephone']);
        unset($data['telephone']);
        unset($data["numero"]);
        unset($data["moyen"]);
        unset($data["code_otp"]);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['reference'] = $this->repository->generateReference('P0011');
        $data['delai'] = Procedure::where(['code' => 'P0011'])->first('delai')->delai;
        $data['paiement'] =1;
        $data['procedure_id'] = Procedure::where(['code' => 'P0011'])->first('uuid')->uuid;

        $cnib =  $this->repository->uploadFile($dataFiles, 'cnib');
        //if($data['exploitant'] == '1') {
            if (isset($data['rccm'])) {
        $cheminRccm =  $this->repository->uploadFile($dataFiles, 'rccm');
            }
        //}

        $protocole_daccord =  $this->repository->uploadFile($dataFiles, 'protocole_daccord');
        $agrement =  $this->repository->uploadFile($dataFiles, 'agrement');
        $quitance =  $this->repository->uploadFile($dataFiles, 'quitance');

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['cnib']);
        if (isset($data['rccm'])) {
        unset($data['rccm']);}
        unset($data['protocole_daccord']);
        unset($data['agrement']);
        unset($data['quitance']);

        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        $demande = $this->repository->create($data);
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
        //    dd($demande->uuid);

        //    $this->repository->uuid();
        $demandePieceP0011Repository->setChemin($cnib, $demande->uuid, 'CNIB/PASSEPORT');
        if (isset($data['rccm'])) {
        $demandePieceP0011Repository->setChemin($cheminRccm, $demande->uuid, 'RCCM');}
        $demandePieceP0011Repository->setChemin($protocole_daccord, $demande->uuid, 'Protocole d\'accord');
        $demandePieceP0011Repository->setChemin($agrement, $demande->uuid, 'Agrement');
        $demandePieceP0011Repository->setChemin($quitance, $demande->uuid, 'Quittance');

        return redirect('/demandes-lists?procedure=PCBCB')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
    }

    // modification des demandes

    public function update(Request $request, UserRepository $userRepository, DemandePieceP0011Repository $demandePieceP0011Repository, DemandeP0011 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
        //dd($data['exploitant']);
        unset($data['telephone']);
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['delai'] = Procedure::where(['code' => 'P0011'])->first('delai')->delai;

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['cnib']);
        unset($data['current_cnib']);
        if (isset($data['rccm'])) {
        unset($data['rccm']);
        unset($data['current_rccm']);
    }
    unset($data['rccm']);
    unset($data['current_rccm']);
    unset($data['protocole_daccord']);
        unset($data['agrement']);
        unset($data['quitance']);
        unset($data['current_quitance']);
        unset($data['current_agrement']);

        unset($data['current_protocole_daccord']);
        unset($data['current_agrement']);


        $this->repository->updateById($request->uuid, $data);
        $demande = $this->repository->getById($request->uuid);

          //Recuperation du chemin des fichiers joint
          if ($request->file('cnib')) {
            $cnib =  $this->repository->uploadFile($dataFiles, 'cnib');
            $demandePieceP0011Repository->setChemin($cnib, $demande->uuid, 'CNIB/PASSEPORT');
             DB::table('demande_piece_p0011_s')->where('chemin',  $request->current_cnib)->delete();
             @unlink($request->current_cnib);
         }
         if (isset($data['rccm'])) {
         if ($request->file('rccm')) {
            $cheminRccm =  $this->repository->uploadFile($dataFiles, 'rccm');
            $demandePieceP0011Repository->setChemin($cheminRccm, $demande->uuid, 'RCCM');
             DB::table('demande_piece_p0011_s')->where('chemin',  $request->current_rccm)->delete();
             @unlink($request->current_rccm);
         }
        }

         if ($request->file('protocole_daccord')) {
            $protocole_daccord =  $this->repository->uploadFile($dataFiles, 'protocole_daccord');
            $demandePieceP0011Repository->setChemin($protocole_daccord, $demande->uuid, 'Protocole d\'accord');
             DB::table('demande_piece_p0011_s')->where('chemin',  $request->current_protocole_daccord)->delete();
             @unlink($request->current_protocole_daccord);
         }

         if ($request->file('agrement')) {
            $agrement =  $this->repository->uploadFile($dataFiles, 'agrement');
            $demandePieceP0011Repository->setChemin($agrement, $demande->uuid, 'Agrement');
             DB::table('demande_piece_p0011_s')->where('chemin',  $request->current_agrement)->delete();
             @unlink($request->current_agrement);
         }

         if ($request->file('quitance')) {
            $quitance =  $this->repository->uploadFile($dataFiles, 'quitance');
            $demandePieceP0011Repository->setChemin($quitance, $demande->uuid, 'Quittance');
             DB::table('demande_piece_p0011_s')->where('chemin',  $request->current_quitance)->delete();
             @unlink($request->current_quitance);
         }


        return redirect('/demandes-lists?procedure=PCBCB')->with('success', 'Votre Demande à bien été Modifiée et en cours de traitement !!');
    }
}
