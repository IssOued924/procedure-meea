<?php

namespace App\Http\Controllers;

use App\Models\DemandeP0011;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP0011Repository;
use App\Repositories\DemandePieceP0011Repository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request, UserRepository $userRepository, DemandePieceP0011Repository $demandePieceP0011Repository, DemandeP0011 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
        //dd($data['exploitant']);
        unset($data['telephone']);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['reference'] = $this->repository->generateReference('P0011');

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


        $demande = $this->repository->create($data);
        $demande->save();
        //    dd($demande->uuid);

        //    $this->repository->uuid();
        $demandePieceP0011Repository->setChemin($cnib, $demande->uuid, 'CNIB/PASSEPORT');
        if (isset($data['rccm'])) {
        $demandePieceP0011Repository->setChemin($cheminRccm, $demande->uuid, 'RCCM');}
        $demandePieceP0011Repository->setChemin($protocole_daccord, $demande->uuid, 'Protocole d\'accord');
        $demandePieceP0011Repository->setChemin($agrement, $demande->uuid, 'Agrement');
        $demandePieceP0011Repository->setChemin($quitance, $demande->uuid, 'Quittance');

        return redirect('/demandes-lists')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
    }
}
