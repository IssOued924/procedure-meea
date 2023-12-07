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
use Illuminate\Support\Facades\DB;

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
        $data['delai_traitement'] = $request->delai_traitement;


        $data['reference'] = $this->repository->generateReference('P007');
        $data['delai'] = Procedure::where(['code' => 'P007'])->first('delai')->delai;

        $data['procedure_id'] = Procedure::where(['code' => 'P007'])->first('uuid')->uuid;
        $data['paiement'] =1;
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


        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);


        $demande = $this->repository->create($data);
        $demande->save();

        //    $this->repository->uuid();
        $demandePieceP006Repository->setChemin($certificat_biodegradabilite, $demande->uuid, 'Certificat de biodegradabilite');


        return redirect('/demandes-lists?procedure=CHESPB')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }

    // modification

    public function update(Request $request, UserRepository $userRepository,
    DemandePieceP007Repository $demandePieceP006Repository, DemandeP007 $demande)
   {

       $data =  $request->all();
       $dataFiles = $request->all();
      // $data['usager_id'] = Auth::user()->uuid;

       unset($data['telephone']);
       $data['etat'] = 'D'; //code de procedure demande deposee

       $data['delai'] = Procedure::where(['code' => 'P007'])->first('delai')->delai;

       //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
       unset($data['certificat_biodegradabilite']);
       unset($data['current_certificat_biodegradabilite']);

       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);

        //Recuperation du chemin des fichiers joint
        if ($request->file('certificat_biodegradabilite')) {
            $certificat_biodegradabilite =  $this->repository->uploadFile($dataFiles, 'certificat_biodegradabilite');
       $demandePieceP006Repository->setChemin($certificat_biodegradabilite, $demande->uuid, 'Certificat de biodegradabilite');
             DB::table('demande_piece_p007_s')->where('chemin',  $request->current_certificat_biodegradabilite)->delete();
             @unlink($request->current_certificat_biodegradabilite);
         }

       return redirect('/demandes-lists?procedure=CHESPB')->with('success', 'Votre Demande à bien été Modifiée  et  en cours de traitement !');
   }

}
