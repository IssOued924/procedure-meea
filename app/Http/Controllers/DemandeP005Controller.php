<?php

namespace App\Http\Controllers;

use App\Models\DemandeP005;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP005Repository;
use App\Repositories\DemandePieceP005Repository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DemandeP005Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP005Repository $repository){
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
        return view('livewire.Demandesp005.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP005Repository $demandePieceP003Repository, DemandeP005 $demande)
    {

        $data =  $request->all();
     //   $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['delai'] = Procedure::where(['code' => 'P005'])->first('delai')->delai;
        $data['procedure_id'] = Procedure::where(['code' => 'P005'])->first('uuid')->uuid;
        $data['paiement'] =1;
        $data['reference'] = $this->repository->generateReference('P005');

        // $user = $userRepository->getById(Auth::user()->uuid);
        // $user->telephone = $request->telephone;
        // //$user->identite = $request->identite;

        // $user->save();
        // //  dd($request->telephone);
        // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

        // $this->repository->create($data);

        // $permis_port_arme =  $this->repository->uploadFile($dataFiles, 'permis_arme');
        // $photo =  $this->repository->uploadFile($dataFiles, 'photo');
        // $cnib_passport =  $this->repository->uploadFile($dataFiles, 'cnib_passport');
        // $document_arme =  $this->repository->uploadFile($dataFiles, 'document_arme');

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        // unset($data['permis_arme']);
        // unset($data['photo']);
        // unset($data['cnib_passport']);
        // unset($data['document_arme']);

        $demande = $this->repository->create($data);
        $demande->save();

        //    $this->repository->uuid();
        // $demandePieceP003Repository->setChemin($permis_port_arme, $demande->uuid, 'Permis de port d\'arme');
        // $demandePieceP003Repository->setChemin($photo, $demande->uuid, 'Photo d\'identite');
        // $demandePieceP003Repository->setChemin($cnib_passport, $demande->uuid, 'CNIB/PASSEPORT');
        // $demandePieceP003Repository->setChemin($document_arme, $demande->uuid, 'Document de l\'arme');

        return redirect('/demandes-lists?procedure=PCBCB2')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }

    // modification des demandes

    public function update(Request $request, UserRepository $userRepository,
    DemandePieceP005Repository $demandePieceP003Repository, DemandeP005 $demande)
   {

       $data =  $request->all();

       $data['etat'] = 'D'; //code de procedure demande deposee
       $data['updated_at'] = Carbon::parse(Carbon::now())->format('Ymd');

       $data['delai'] = Procedure::where(['code' => 'P005'])->first('delai')->delai;


       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);


       return redirect('/demandes-lists?procedure=PCBCB2')->with('success', 'Votre Demande à bien été Modifiée et  en cours de traitement !');
   }
}
