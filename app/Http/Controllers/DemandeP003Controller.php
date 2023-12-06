<?php

namespace App\Http\Controllers;

use App\Models\DemandeP003;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP003Repository;
use App\Repositories\DemandePieceP003Repository;
use GuzzleHttp\Psr7\UploadedFile;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DemandeP003Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP003Repository $repository){
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
        return view('livewire.Demandesp003.create');
    }

    public function store(Request $request, UserRepository $userRepository,
     DemandePieceP003Repository $demandePieceP003Repository, DemandeP003 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['delai'] = Procedure::where(['code' => 'P003'])->first('delai')->delai;
        $data['procedure_id'] = Procedure::where(['code' => 'P003'])->first('uuid')->uuid;
        $data['paiement'] =1;
        $data['reference'] = $this->repository->generateReference('P003');

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
        $demandePieceP003Repository->setChemin($permis_port_arme, $demande->uuid, 'Permis de port d\'arme');
        $demandePieceP003Repository->setChemin($photo, $demande->uuid, 'Photo d\'identite');
        $demandePieceP003Repository->setChemin($cnib_passport, $demande->uuid, 'CNIB/PASSEPORT');
        $demandePieceP003Repository->setChemin($document_arme, $demande->uuid, 'Document de l\'arme');

        return redirect('/demandes-lists?procedure=ADDMC')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }

            // modification
    public function update(Request $request, UserRepository $userRepository,
    DemandePieceP003Repository $demandePieceP003Repository, DemandeP003 $demande)
   {

       $data =  $request->all();
       $dataFiles = $request->all();
      // $data['usager_id'] = Auth::user()->uuid;



       $data['etat'] = 'D'; //code de procedure demande deposee
        $data['updated_at'] = Carbon::parse(Carbon::now())->format('Ymd');

       $data['delai'] = Procedure::where(['code' => 'P003'])->first('delai')->delai;

       //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
       unset($data['permis_arme']);
       unset($data['photo']);
       unset($data['cnib_passport']);
       unset($data['document_arme']);
       unset($data['current_permis_arme']);
       unset($data['current_photo']);
       unset($data['current_cnib_passport']);
       unset($data['current_document_arme']);
       unset($data['telephone']);

       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);

       //Recuperation du chemin des fichiers joint
       if ($request->file('permis_arme')) {
       $permis_port_arme =  $this->repository->uploadFile($dataFiles, 'permis_arme');
       $demandePieceP003Repository->setChemin($permis_port_arme, $demande->uuid, 'Permis de port d\'arme');
        DB::table('demande_piece_p003_s')->where('chemin',  $request->current_permis_arme)->delete();
        @unlink($request->current_permis_arme);
    }

    if ($request->file('photo')) {
       $photo =  $this->repository->uploadFile($dataFiles, 'photo');
       $demandePieceP003Repository->setChemin($photo, $demande->uuid, 'Photo d\'identite');
         DB::table('demande_piece_p003_s')->where('chemin',  $request->current_photo)->delete();
         @unlink($request->current_photo);
     }

     if ($request->file('cnib_passport')) {
        $cnib_passport =  $this->repository->uploadFile($dataFiles, 'cnib_passport');
        $demandePieceP003Repository->setChemin($cnib_passport, $demande->uuid, 'CNIB/PASSEPORT');
          DB::table('demande_piece_p003_s')->where('chemin',  $request->current_cnib_passport)->delete();
          @unlink($request->current_cnib_passport);
      }
      if ($request->file('document_arme')) {
        $document_arme =  $this->repository->uploadFile($dataFiles, 'document_arme');
        $demandePieceP003Repository->setChemin($document_arme, $demande->uuid, 'Document de l\'arme');
          DB::table('demande_piece_p003_s')->where('chemin',  $request->current_document_arme)->delete();
          @unlink($request->current_document_arme);
      }

       return redirect('/demandes-lists?procedure=ADDMC')->with('success', 'Votre Demande à bien été Modifiée et  en cours de traitement !');
   }



}
