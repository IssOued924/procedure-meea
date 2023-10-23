<?php

namespace App\Http\Controllers;

use App\Models\DemandeP009;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP009Repository;
use App\Repositories\DemandePieceP009Repository;
use GuzzleHttp\Psr7\UploadedFile;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class DemandeP009Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP009Repository $repository){
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
        return view('livewire.Demandesp009.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP009Repository $demandePieceP009Repository, DemandeP009 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['procedure_id'] = Procedure::where(['code' => 'P003'])->first('uuid')->uuid;

        // $user = $userRepository->getById(Auth::user()->uuid);
        // $user->telephone = $request->telephone;
        // //$user->identite = $request->identite;

        // $user->save();
        // //  dd($request->telephone);
        // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

        // $this->repository->create($data);

        $permis_port_arme =  $this->repository->uploadFile($dataFiles, 'permis_arme');
        $photo =  $this->repository->uploadFile($dataFiles, 'photo');
        $cnib_passport =  $this->repository->uploadFile($dataFiles, 'cnib_passport');
        $document_arme =  $this->repository->uploadFile($dataFiles, 'document_arme');

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['permis_arme']);
        unset($data['photo']);
        unset($data['cnib_passport']);
        unset($data['document_arme']);

        $demande = $this->repository->create($data);
        $demande->save();

        //    $this->repository->uuid();
        $demandePieceP009Repository->setChemin($permis_port_arme, $demande->uuid, 'Permis de port d\'arme');
        $demandePieceP009Repository->setChemin($photo, $demande->uuid, 'Photo d\'identite');
        $demandePieceP009Repository->setChemin($cnib_passport, $demande->uuid, 'CNIB/PASSEPORT');
        $demandePieceP009Repository->setChemin($document_arme, $demande->uuid, 'Document de l\'arme');

        return redirect('/')->with('status', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }



}
