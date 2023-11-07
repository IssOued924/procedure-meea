<?php

namespace App\Http\Controllers;

use App\Models\DemandeP006;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP006Repository;
use App\Repositories\DemandePieceP006Repository;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;

class DemandeP006Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP006Repository $repository){
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
        return view('livewire.Demandesp006.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP006Repository $demandePieceP006Repository, DemandeP006 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['reference'] = $this->repository->generateReference('P006');
        $data['procedure_id'] = Procedure::where(['code' => 'P006'])->first('uuid')->uuid;

        // $user = $userRepository->getById(Auth::user()->uuid);
        // $user->telephone = $request->telephone;
        // //$user->identite = $request->identite;

        // $user->save();
        // //  dd($request->telephone);
        // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

        // $this->repository->create($data);

        $facture_pro_format =  $this->repository->uploadFile($dataFiles, 'facture_pro');
        $rccm =  $this->repository->uploadFile($dataFiles, 'rccm');
        $form_demande =  $this->repository->uploadFile($dataFiles, 'demande_form');
        $document_technique_utilisation =  $this->repository->uploadFile($dataFiles, 'document_technique');
        $registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'registre_tracabilite');

        //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
        unset($data['facture_pro']);
        unset($data['demande_form']);
        unset($data['rccm']);
        unset($data['document_technique']);
        unset($data['registre_tracabilite']);

        $demande = $this->repository->create($data);
        $demande->save();

        //    $this->repository->uuid();
        $demandePieceP006Repository->setChemin($facture_pro_format, $demande->uuid, 'Facture Pro Format');
        $demandePieceP006Repository->setChemin($rccm, $demande->uuid, 'RCCM');
        $demandePieceP006Repository->setChemin($form_demande, $demande->uuid, 'Formulaire demande');
        $demandePieceP006Repository->setChemin($document_technique_utilisation, $demande->uuid, 'Document de Technique justifiant utilisation');
        $demandePieceP006Repository->setChemin($registre_tracabilite, $demande->uuid, 'Registre de tracabilite');

        return redirect('/demandes-lists')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }


}
