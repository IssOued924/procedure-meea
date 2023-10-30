<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP004;
use App\Models\DemandePieceP004;
use App\Models\Procedure;
use App\Models\Usager;
use Illuminate\Http\Request;
use App\Repositories\DemandeP004Repository;
use App\Repositories\DemandePieceP004Repository;
use App\Repositories\UserRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;

class DemandeP004Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP004Repository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        return view('create');
    }

    public function create()
    {
        return view('livewire.DemandesP004.create');
    }

    public function store(Request $request, UserRepository $userRepository, DemandePieceP004Repository $demandePieceP004Repository, DemandeP004 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();

        unset($data['telephone']);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['reference'] = $this->repository->generateReference('P004');

        $data['procedure_id'] = Procedure::where(['code' => 'P004'])->first('uuid')->uuid;

        $certificat_origine =  $this->repository->uploadFile($dataFiles, 'certificat_origine');
        $certificat_sanitaire =  $this->repository->uploadFile($dataFiles, 'certificat_sanitaire');
        unset($data['certificat_origine']);
        unset($data['certificat_sanitaire']);
        unset($data['nom']);

        $demande = $this->repository->create($data);
        $demande->save();
        //    dd($demande->uuid);

        //    $this->repository->uuid();
        $demandePieceP004Repository->setChemin($certificat_origine, $demande->uuid, 'Certificat Origine');
        $demandePieceP004Repository->setChemin($certificat_sanitaire, $demande->uuid, 'Certificat Sanitaire');


        return redirect('/')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
    }
}
