<?php

namespace App\Http\Controllers;

use App\Models\DemandeP007;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP007Repository;
use App\Repositories\DemandePieceP007Repository;
use App\Repositories\FileUploadRepository;
use App\Repositories\DemandeRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;


class DemandeP007Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP007Repository $repository){
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
        return view('livewire.Demandesp007.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP007Repository $demandePieceP006Repository, DemandeP007 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['reference'] = $this->repository->generateReference('P007');
        $data['procedure_id'] = Procedure::where(['code' => 'P007'])->first('uuid')->uuid;

        // $user = $userRepository->getById(Auth::user()->uuid);
        // $user->telephone = $request->telephone;
        // //$user->identite = $request->identite;

        // $user->save();
        // //  dd($request->telephone);
        // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

        // $this->repository->create($data);

        $certificat_biodegradabilite =  $this->repository->uploadFile($dataFiles, 'certificat_biodegradabilite');


        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['certificat_biodegradabilite']);


        $demande = $this->repository->create($data);
        $demande->save();

        //    $this->repository->uuid();
        $demandePieceP006Repository->setChemin($certificat_biodegradabilite, $demande->uuid, 'Certificat de biodegradabilite');


        return redirect('/')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }

}
