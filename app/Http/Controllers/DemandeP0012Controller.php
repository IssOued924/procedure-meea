<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Commune;
use App\Models\DemandeP0012;
use App\Models\DemandePieceP001;
use App\Models\Procedure;
use App\Repositories\DemandeP0012Repository;
use Illuminate\Http\Request;
use App\Repositories\DemandePieceP0012Repository;
use App\Repositories\PaiementRepository;
use App\Repositories\UserRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandeP0012Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP0012Repository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('create');
    }

    public function create()
    {

        //$data["commune"] = Commune::all();
        // dd($data["commune"]);
        return view('livewire.Demandesp0012.create');
    }


    public function payment($numero, $otp) {
        if ($numero && $otp) {
            return true;
        }else {
            return false;
        }
        //return view('livewire.Demandesp0012.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP0012Repository $demandePieceP0012Repository, DemandeP0012 $demande, PaiementRepository $paiementRepository)
    {

        $data =  $request->all();
        $validator = Validator::make($request->all(), [
            'cnib' => 'required|file|max:5120', 
            'photo' => 'required|file|max:5120',
            'list_personne' => 'required|file|max:5120',// 3072 correspond à 3 Mo (3 * 1024)
        ]);
    
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }
       // dd($data);

        $dataFiles = $request->all();
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
        $data['reference'] = $this->repository->generateReference('P0012');

        // $data['delai'] = Procedure::pluck('delai');
        $data['delai'] = Procedure::where(['code' => 'P0012'])->first('delai')->delai;

        $data['procedure_id'] = Procedure::where(['code' => 'P0012'])->first('uuid')->uuid;
            //paiement
        $data['paiement'] = 1;

      //  dd($data['procedure_id']);
        unset($data['telephone']);
        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        // $user->save();
        //  dd($request->telephone);
        // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

        // $this->repository->create($data);

        $cnib =  $this->repository->uploadFile($dataFiles, 'cnib');
        $photo =  $this->repository->uploadFile($dataFiles, 'photo');
        $list_personne =  $this->repository->uploadFile($dataFiles, 'list_personne');

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['cnib']);
        unset($data['photo']);
        unset($data['list_personne']);

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

        //    $this->repository->uuid();
        $demandePieceP0012Repository->setChemin($cnib, $demande->uuid, 'CNIB');
        $demandePieceP0012Repository->setChemin($photo, $demande->uuid, 'Photo d\'Identite');
        $demandePieceP0012Repository->setChemin($list_personne, $demande->uuid, 'Liste des Personnes concernées');
        

        return redirect('/demandes-lists?procedure=PETE')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');

    }

    public function update(Request $request, UserRepository $userRepository,
    DemandePieceP0012Repository $demandePieceP0012Repository, DemandeP0012 $demande)
   {

       $data =  $request->all();

       $dataFiles = $request->all();
       $data['etat'] = 'D'; //code de procedure demande deposee

       // $data['delai'] = Procedure::pluck('delai');
       $data['delai'] = Procedure::where(['code' => 'P0012'])->first('delai')->delai;

       unset($data['cnib']);
       unset($data['telephone']);
       unset($data['photo']);
       unset($data['list_personne']);
       unset($data['current_cnib']);
       unset($data['current_photo']);
       unset($data['current_list_personne']);

       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);

         //Recuperation du chemin des fichiers joint
         if ($request->file('cnib')) {
            $cnib =  $this->repository->uploadFile($dataFiles, 'cnib');
            $demandePieceP0012Repository->setChemin($cnib, $demande->uuid, 'CNIB');
            DB::table('demande_piece_p0012_s')->where('chemin',  $request->current_cnib)->delete();
            @unlink($request->current_cnib);
        }

        if ($request->file('photo')) {
            $photo =  $this->repository->uploadFile($dataFiles, 'photo');
            $demandePieceP0012Repository->setChemin($photo, $demande->uuid, 'Photo d\'Identite');
            DB::table('demande_piece_p0012_s')->where('chemin',  $request->current_photo)->delete();
            @unlink($request->current_photo);
        }

        if ($request->file('list_personne')) {
            $list_personne =  $this->repository->uploadFile($dataFiles, 'list_personne');
            $demandePieceP0012Repository->setChemin($list_personne, $demande->uuid, 'Liste des Personnes concernées');
            DB::table('demande_piece_p0012_s')->where('chemin',  $request->current_list_personne)->delete();
            @unlink($request->current_list_personne);
        }


       return redirect('/demandes-lists?procedure=PETE')->with('success', 'Votre Demande à bien été Modifiée et  en cours de traitement !');

   }
}
