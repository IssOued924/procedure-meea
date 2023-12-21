<?php

namespace App\Http\Controllers;

use App\Models\DemandeP006;
use App\Models\Procedure;
use Illuminate\Http\Request;
use App\Repositories\DemandeP006Repository;
use App\Repositories\DemandePieceP006Repository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
            'facture_pro' => 'required|file|max:5120', 
            'demande_form' => 'required|file|max:5120', 
            'rccm' => 'required|file|max:5120', 
            'document_technique' => 'required|file|max:5120', 
            'registre_tracabilite' => 'required|file|max:5120', 
          
            // 3072 correspond à 3 Mo (3 * 1024)
        ]);
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $dataFiles = $request->all();
       // $data['usager_id'] = Auth::user()->uuid;

        unset($data['telephone']);
        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);

        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['reference'] = $this->repository->generateReference('P006');
        $data['delai'] = Procedure::where(['code' => 'P006'])->first('delai')->delai;
        $data['procedure_id'] = Procedure::where(['code' => 'P006'])->first('uuid')->uuid;
        $data['paiement'] =1;
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

        return redirect('/demandes-lists?procedure=CEESPNB')->with('success', 'Votre Demande à bien été Soumise et  en cours de traitement !');
    }

    // modification
    public function update(Request $request, UserRepository $userRepository,
    DemandePieceP006Repository $demandePieceP006Repository, DemandeP006 $demande)
   {

       $data =  $request->all();
       $dataFiles = $request->all();

       $data['etat'] = 'D'; //code de procedure demande deposee
       $data['delai'] = Procedure::where(['code' => 'P006'])->first('delai')->delai;
       $data['updated_at'] = Carbon::parse(Carbon::now())->format('Ymd');


       //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
       unset($data['facture_pro']);
       unset($data['demande_form']);
       unset($data['rccm']);
       unset($data['document_technique']);
       unset($data['registre_tracabilite']);

       unset($data['current_facture_pro']);
       unset($data['current_demande_form']);
       unset($data['current_rccm']);
       unset($data['current_document_technique']);
       unset($data['current_registre_tracabilite']);

       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);

        //Recuperation du chemin des fichiers joint
        if ($request->file('facture_pro')) {
            $facture_pro_format =  $this->repository->uploadFile($dataFiles, 'facture_pro');
            $demandePieceP006Repository->setChemin($facture_pro_format, $demande->uuid, 'Facture Pro Format');
             DB::table('demande_piece_p006_s')->where('chemin',  $request->current_facture_pro)->delete();
             @unlink($request->current_facture_pro);
         }

         if ($request->file('rccm')) {
            $rccm =  $this->repository->uploadFile($dataFiles, 'rccm');
            $demandePieceP006Repository->setChemin($rccm, $demande->uuid, 'RCCM');
             DB::table('demande_piece_p006_s')->where('chemin',  $request->current_rccm)->delete();
             @unlink($request->current_rccm);
         }

         if ($request->file('demande_form')) {
            $form_demande =  $this->repository->uploadFile($dataFiles, 'demande_form');
            $demandePieceP006Repository->setChemin($form_demande, $demande->uuid, 'Formulaire demande');
             DB::table('demande_piece_p006_s')->where('chemin',  $request->current_demande_form)->delete();
             @unlink($request->current_demande_form);
         }

         if ($request->file('document_technique')) {
            $document_technique_utilisation =  $this->repository->uploadFile($dataFiles, 'document_technique');
            $demandePieceP006Repository->setChemin($document_technique_utilisation, $demande->uuid, 'Document Technique justifiant utilisation');
             DB::table('demande_piece_p006_s')->where('chemin',  $request->current_document_technique)->delete();
             @unlink($request->current_document_technique);
         }

         if ($request->file('registre_tracabilite')) {
            $registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'registre_tracabilite');
            $demandePieceP006Repository->setChemin($registre_tracabilite, $demande->uuid, 'Registre de tracabilite');
             DB::table('demande_piece_p006_s')->where('chemin',  $request->current_registre_tracabilite)->delete();
             @unlink($request->current_registre_tracabilite);
         }


       return redirect('/demandes-lists?procedure=CEESPNB')->with('success', 'Votre Demande à bien été Modifiée et  en cours de traitement !');
   }


}
