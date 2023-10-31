<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP0012;
use App\Models\DemandePieceP001;
use App\Models\Procedure;
use App\Repositories\DemandeP0012Repository;
use Illuminate\Http\Request;
use App\Repositories\DemandePieceP0012Repository;
use App\Repositories\UserRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;

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

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP0012Repository $demandePieceP0012Repository, DemandeP0012 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['reference'] = $this->repository->generateReference('P0012');


        $data['procedure_id'] = Procedure::where(['code' => 'P0012'])->first('uuid')->uuid;
      //  dd($data['procedure_id']);
        unset($data['telephone']);


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

        //    $this->repository->uuid();
        $demandePieceP0012Repository->setChemin($cnib, $demande->uuid, 'CNIB');
        $demandePieceP0012Repository->setChemin($photo, $demande->uuid, 'Photo d\'Identite');
        $demandePieceP0012Repository->setChemin($list_personne, $demande->uuid, 'Liste des Personnes concernées');

        return redirect('/demandes-lists')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }
}
