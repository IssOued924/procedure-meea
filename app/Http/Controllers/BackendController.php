<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\CommentaireP001;
use App\Models\CommentaireP0011;
use App\Models\CommentaireP0012;
use App\Models\CommentaireP003;
use App\Models\CommentaireP004;
use App\Models\CommentaireP006;
use App\Models\CommentaireP007;
use App\Models\CommentaireP008;
use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\DemandeP001;
use App\Models\DemandeP0011;
use App\Models\DemandeP004;
use App\Models\DemandeP0012;
use App\Models\DemandeP003;
use App\Models\DemandeP006;
use App\Models\DemandeP007;
use App\Models\DemandeP008;
use App\Models\DemandePieceP001;
use App\Models\Procedure;
use App\Models\StatutDemande;
use App\Repositories\BackendRepository;
use App\Repositories\CommentaireP001Repository;
use App\Repositories\DemandeP0011Repository;
use App\Repositories\DemandeP0012Repository;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandeP002Repository;
use App\Repositories\DemandeP003Repository;
use App\Repositories\DemandeP004Repository;
use App\Repositories\DemandeP006Repository;
use App\Repositories\DemandeP007Repository;
use App\Repositories\DemandeP008Repository;
use App\Repositories\DemandeP009Repository;
use App\Repositories\DemandePieceP001Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\DemandeP002;
use App\Models\CommentaireP002;
use App\Models\CommentaireP005;
use App\Models\DemandeP005;
use App\Repositories\DemandeP005Repository;
use Carbon\Carbon;

use App\Models\User;
use App\Mail\ValidateDemandMailable;
use App\Mail\RejectDemandMailable;
use Illuminate\Support\Facades\Mail;

class BackendController extends Controller
{
    public $repository;
    public function __construct(BackendRepository $repository)
    {
        Carbon::setLocale("fr");
        $this->repository = $repository;
    }



    public function index(BackendRepository $backendRepository)
    {

        // dd(Auth::user()->role->libelle);
        $data = [

            "nombreEcotourisme" => $backendRepository->nombreDemandeByProcedure('demande_p0012_s', ['etat' => 'D']),
            "nombreProduitChimique" => $backendRepository->nombreDemandeByProcedure('demande_p001_s', ['etat' => 'D']),
            "nombreDechet" => $backendRepository->nombreDemandeByProcedure('demande_p008_s', ['etat' => 'D']),
            "nombreChasse" => $backendRepository->nombreDemandeByProcedure('demande_p003_s', ['etat' => 'D']),
            "nombreDetention" => $backendRepository->nombreDemandeByProcedure('demande_p004_s', ['etat' => 'D']),
            "nombreExemption" => $backendRepository->nombreDemandeByProcedure('demande_p006_s', ['etat' => 'D']),
            "nombreCoupeBois" => $backendRepository->nombreDemandeByProcedure('demande_p0011_s', ['etat' => 'D']),
            "nombreHomologation" => $backendRepository->nombreDemandeByProcedure('demande_p007_s', ['etat' => 'D']),
            "nombreCirculationBois" => $backendRepository->nombreDemandeByProcedure('demande_p005_s', ['etat' => 'D']),
            "nombreEau" => $backendRepository->nombreDemandeByProcedure('demande_p002_s', ['etat' => 'D']),


        ];

        return view('backend.home', $data);
    }

    public function procedureDashboard($procedure, $procedureName)
    {
        // dd($this->repository->uuidProcedureByDemande($procedure));

        // Procedure::where('etat', '=', 'D')->first()->statut;
        $data = [

            //  "demandes" => $demandeP001Repository->all(),
            "procedure" => $this->repository->uuidProcedureByDemande($procedure, ['estperiodique' => '1']),
            "procedureName" => $procedureName,
            "demandeDeposee" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'D']),
            "demandeValider" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'V']),
            "demandeSigne" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'S']),
            "demandeRejeter" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'R']),
            "demandeArchive" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'A']),
            "demandeComplement" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'C']),
            "demandeEtude" =>   $this->repository->nombreDemandeByProcedure($procedure, ['etat' => 'E']),
        ];

        return view('backend.home_detail', $data);
    }



    // Recuperation de la list des demande concernant p001 Produi chimique
    public function listDemande(DemandeP001Repository $demandeP001Repository,  DemandeP001 $demandeTest)
    {
        // dd( StatutDemande::where('etat', '=', 'V')->first()->statut);
        $data = [
            "demandes" => $demandeP001Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandeTest->statut(),
            "agents" => Agent::all(),
        ];

        //   dd($data['demandes'][0]->demandePiece);


        return view('backend.list_demande', $data);
    }


    // Liste des demandes p002 agrement en eau
    public function listDemandep002(DemandeP002Repository $demandeP002Repository,  DemandeP002 $demandep002)
    {

        $data = [
            "demandes" => $demandeP002Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP002Repository->nombre('demande_p002_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandep002->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep002', $data);
    }

    //   liste des demandes de la procedure ecotourisme p0012

    public function listDemandep0012(DemandeP0012Repository $demandeP0012Repository,  DemandeP0012 $demandep0012)
    {

        $data = [
            "demandes" => $demandeP0012Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP0012Repository->nombre('demande_p0012_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandep0012->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);


        return view('backend.list_demandep0012', $data);
    }







    //   liste des demandes de la procedure gestion des dechets p008

    public function listDemandep008(DemandeP008Repository $demandeP008Repository,  DemandeP008 $demandep008)
    {

        $data = [
            "demandes" => $demandeP008Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP008Repository->nombre('demande_p008_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandep008->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep008', $data);
    }

    //   liste des demandes de permis de chasse des dechets p003

    public function listDemandep003(DemandeP003Repository $demandeP003Repository,  DemandeP003 $demandep003)
    {

        $data = [
            "demandes" => $demandeP003Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP003Repository->nombre('demande_p003_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandep003->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep003', $data);
    }


    //   liste des demandes de permis de detention dun animal p004

    public function listDemandep004(DemandeP004Repository $demandeP004Repository,  DemandeP004 $demandep004)
    {

        $data = [
            "demandes" => $demandeP004Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP004Repository->nombre('demande_p004_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandep004->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep004', $data);
    }

      //   liste des demandes de permis de circulation de bois et de charbon de bois

      public function listDemandep005(DemandeP005Repository $demandeP005Repository,  DemandeP005 $demandep005)
      {

          $data = [
              "demandes" => $demandeP005Repository->all()->sortByDesc('created_at'),
              "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
              "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
              "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
              "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
              "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
              "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
              "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
              //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
              "demandeEnCours" => $demandeP005Repository->nombre('demande_p004_s', array('etat' => 'en cours')),
              "demandeEtat" => $demandep005->statut(),
              "agents" => Agent::all(),
          ];
          //   dd($data['demandes'][0]->demandePiece);
          // dd($data['demandeEtat']);

          return view('backend.list_demandep005', $data);
      }



    //   liste des demandes de permis de detention dun animal p004

    public function listDemandep0011(DemandeP0011Repository $demandeP0011Repository,  DemandeP0011 $demandeP0011)
    {

        $data = [
            "demandes" => $demandeP0011Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP0011Repository->nombre('demande_p004_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandeP0011->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep0011', $data);
    }

    //   liste des demandes de permis de detention dun animal p006

    public function listDemandep006(DemandeP006Repository $demandeP006Repository,  DemandeP006 $demandeP006)
    {

        $data = [
            "demandes" => $demandeP006Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP006Repository->nombre('demande_p004_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandeP006->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep006', $data);
    }



    //   liste des demandes de permis de detention dun animal p004

    public function listDemandep007(DemandeP007Repository $demandeP007Repository,  DemandeP007 $demandeP007)
    {

        $data = [
            "demandes" => $demandeP007Repository->all()->sortByDesc('created_at'),
            "statutDepose" => StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive" => StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete" => StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude" => StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement" => StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne" => StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide" => StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP007Repository->nombre('demande_p007_s', array('etat' => 'en cours')),
            "demandeEtat" => $demandeP007->statut(),
            "agents" => Agent::all(),
        ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

        return view('backend.list_demandep007', $data);
    }

    // fonction d'assignation d'un collaborateur a un dossier
    public function assignation( $model,  $idDemande,   $nameDemandeId, $tableName, Request $request) {
        //Creer une affection
        $data = $request->all();
    
        $modele = app("App\Models\\$model");
       // $affectation = new $table();
       
         $modele::create([
            $nameDemandeId=>$idDemande,
            'agent_id' => $data["agent_id"]
         ]);
    
         DB::table($tableName)->where('uuid', $idDemande)->update(['last_agent_assign' => $data["agent_id"]]);
    
        Alert::success('Succès', 'demande assignée !');
        return redirect()->back();
        
    }


    //Function de mise a jour de statut demande

    public function statutChange($id, $currentStatus, $table, Request $request)

    {

        $nextStatus = '';
        switch ($currentStatus) {
            case 'D':
                $nextStatus = 'E';
                break;
            case 'E':
                $nextStatus = 'V';
                break;
            case 'V':
                $nextStatus = 'S';
                break;
            case 'S':
                $nextStatus = 'A';
                break;
            default:
                $nextStatus = 'A';
                break;
        }
        DB::table($table)->where('uuid', $id)->update(['etat' => $nextStatus]);



        if ($table == 'demande_p001_s') {


            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire1 = new CommentaireP001();
            $commentaire1->create([
                'libelle' => $request->libelle,
                'demande_p001_id' => $id
            ]);
            // return redirect()->back()->with('success', "opération effectuée avec succès !");

        } elseif ($table == 'demande_p003_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire3 = new CommentaireP003();
            $commentaire3->create([
                'libelle' => $request->libelle,
                'demande_p003_id' => $id
            ]);

        } elseif ($table == 'demande_p002_s') {

            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire2 = new CommentaireP002();
            $commentaire2->create([
                'libelle' => $request->libelle,
                'demande_p002_id' => $id
            ]);
        }elseif ($table == 'demande_p003_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire3 = new CommentaireP003();
            $commentaire3->create([
                'libelle' => $request->libelle,
                'demande_p003_id' => $id
            ]);
        } elseif ($table == 'demande_p004_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire4 = new CommentaireP004();
            $commentaire4->create([
                'libelle' => $request->libelle,
                'demande_p004_id' => $id
            ]);
        } elseif ($table == 'demande_p006_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire6 = new CommentaireP006();
            $commentaire6->create([
                'libelle' => $request->libelle,
                'demande_p006_id' => $id
            ]);
        } elseif ($table == 'demande_p007_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire7 = new CommentaireP007();
            $commentaire7->create([
                'libelle' => $request->libelle,
                'demande_p007_id' => $id
            ]);
        } elseif ($table == 'demande_p008_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire8 = new CommentaireP008();
            $commentaire8->create([
                'libelle' => $request->libelle,
                'demande_p008_id' => $id
            ]);
        } elseif ($table == 'demande_p0011_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire11 = new CommentaireP0011();
            $commentaire11->create([
                'libelle' => $request->libelle,
                'demande_p0011_id' => $id
            ]);
        } elseif ($table == 'demande_p0012_s') {
            $dataFiles = $request->all();
            $noteEtude =  $this->repository->uploadNoteEtude($table, $dataFiles, 'note_etude_file', $id);

            $commentaire12 = new CommentaireP0012();
            $commentaire12->create([
                'libelle' => $request->libelle,
                'demande_p0012_id' => $id
            ]);
        }


        // DB::table('commentaire_p001_s')->insert();


        $proc_id = DB::table($table)->where('uuid', $id)->first()->procedure_id;
        $usager_id = DB::table($table)->where('uuid', $id)->first()->usager_id;
        $user_email = User::where('usager_id', $usager_id)->first()->email;
        $demand = array(
            "procedure"  => Procedure::where('uuid', $proc_id)->first()->libelle_long,
            "uuid" => $id,
            "etat"   => StatutDemande::where('etat', $nextStatus)->first()->statut
        );
        Mail::to($user_email)->send(new ValidateDemandMailable( $demand ));

        return redirect()->back()->with('success', "Opération éffectuée avec succès !");
    }

    // fonction de chargement de acte

    public function uploadActe($id, $currentStatus, $table, Request $request)
    {
        $dataFiles = $request->all();
        if ($currentStatus == 'S') {

            $acteSigne =  $this->repository->uploadActe($table, $dataFiles, 'output_file', $id);
            return redirect()->back()->with('success', "L'acte a été Joint avec succès !");
        }
        else
        return redirect()->back()->with('success', "Operation echouée !");
    }

    //joindre une note d'etude
    // public function uploadNoteEtude($id, $currentStatus, $table, Request $request)
    // {
    //     $dataFiles = $request->all();
    //     if ($currentStatus == 'S') {

    //         $acteSigne =  $this->repository->uploadActe($table, $dataFiles, 'output_file', $id);
    //         return redirect()->back()->with('success', "La note d'étude a été Joint avec succès !");
    //     }
    //     else
    //     return redirect()->back()->with('success', "Operation echouée !");
    // }


    public function rejetter($id, $table, Request $request)
    {
        DB::table($table)->where('uuid', $id)->update(['etat' => 'R']);

        if ($table == 'demande_p001_s') {
            $commentaire1 = new CommentaireP001();
            $commentaire1->create([
                'libelle' => $request->libelle,
                'demande_p001_id' => $id
            ]);
        }elseif ($table == 'demande_p002_s') {
            $commentaire2 = new CommentaireP002();
            $commentaire2->create([
                'libelle' => $request->libelle,
                'demande_p002_id' => $id
            ]);
        } elseif ($table == 'demande_p003_s') {
            $commentaire3 = new CommentaireP003();
            $commentaire3->create([
                'libelle' => $request->libelle,
                'demande_p003_id' => $id
            ]);
        } elseif ($table == 'demande_p004_s') {
            $commentaire4 = new CommentaireP004();
            $commentaire4->create([
                'libelle' => $request->libelle,
                'demande_p004_id' => $id
            ]);
        }elseif ($table == 'demande_p005_s') {
            $commentaire5 = new CommentaireP005();
            $commentaire5->create([
                'libelle' => $request->libelle,
                'demande_p005_id' => $id
            ]);
        } elseif ($table == 'demande_p006_s') {
            $commentaire6 = new CommentaireP006();
            $commentaire6->create([
                'libelle' => $request->libelle,
                'demande_p006_id' => $id
            ]);
        } elseif ($table == 'demande_p007_s') {
            $commentaire7 = new CommentaireP007();
            $commentaire7->create([
                'libelle' => $request->libelle,
                'demande_p007_id' => $id
            ]);
        } elseif ($table == 'demande_p008_s') {
            $commentaire8 = new CommentaireP008();
            $commentaire8->create([
                'libelle' => $request->libelle,
                'demande_p008_id' => $id
            ]);
        } elseif ($table == 'demande_p0011_s') {
            $commentaire11 = new CommentaireP0011();
            $commentaire11->create([
                'libelle' => $request->libelle,
                'demande_p0011_id' => $id
            ]);
        } elseif ($table == 'demande_p0012_s') {
            $commentaire12 = new CommentaireP0012();
            $commentaire12->create([
                'libelle' => $request->libelle,
                'demande_p0012_id' => $id
            ]);
        }

        $proc_id = DB::table($table)->where('uuid', $id)->first()->procedure_id;
        $usager_id = DB::table($table)->where('uuid', $id)->first()->usager_id;
        $user_email = User::where('usager_id', $usager_id)->first()->email;
        $currentStatus = DB::table($table)->where('uuid', $id)->first()->etat;
        $demand = array(
            "procedure"  => Procedure::where('uuid', $proc_id)->first()->libelle_long,
            "uuid" => $id,
            "etat"   => StatutDemande::where('etat', $currentStatus)->first()->statut,
            "motif"   => $request->libelle
        );
        Mail::to($user_email)->send(new RejectDemandMailable( $demand ));
        
        return redirect()->back()->with('success', "La Demande a été Rejetter avec succès !");
    }




    public function nombreDemandeByProcedure(
        DemandeP001Repository $demandeP001Repository,
        DemandeP004Repository $demandeP004Repository,
        DemandeP005Repository $demandeP005Repository,
        DemandeP008Repository $demandeP008Repository,
        DemandeP0011Repository $demandeP0011Repository,
        DemandeP003Repository $demandeP003Repository,
        DemandeP0012Repository $demandeP0012Repository,
        DemandeP006Repository $demandeP006Repository,
        DemandeP007Repository $demandeP007Repository,
        DemandeP002Repository $demandeP002Repository

    ) {

        print json_encode(array(
            'status' => 'success',
            "nbProchimique" => $demandeP001Repository->nombre('demande_p001_s', array('etat' => 'D')),
            "nbEcotourisme" => $demandeP0012Repository->nombre('demande_p0012_s', array('etat' => 'D')),
            'nbdechet' => $demandeP008Repository->nombre('demande_p008_s', array('etat' => 'D')),
            'nbpchasse' => $demandeP003Repository->nombre('demande_p003_s', array('etat' => 'D')),
            'nbdetention' => $demandeP004Repository->nombre('demande_p004_s', array('etat' => 'D')),
            'nbce' => $demandeP006Repository->nombre('demande_p006_s', array('etat' => 'D')),
            'nbhomologation' => $demandeP007Repository->nombre('demande_p007_s', array('etat' => 'D')),
            'nbcoupe' => $demandeP0011Repository->nombre('demande_p0011_s', array('etat' => 'D')),
            'nbcirculation' => $demandeP005Repository->nombre('demande_p005_s', array('etat' => 'D')),
            "nbAgrementTechique" => $demandeP002Repository->nombre('demande_p002_s', array('etat' => 'D')),
        ));
    }



    public function listsDemande(
        DemandeP001Repository $demandeP001Repository,
        DemandeP002Repository $demandeP002Repository,
        DemandeP003Repository $demandeP003Repository,
        DemandeP004Repository $demandeP004Repository,
        DemandeP005Repository $demandeP005Repository,
        DemandeP006Repository $demandeP006Repository,
        DemandeP007Repository $demandeP007Repository,
        DemandeP008Repository $demandeP008Repository,
        DemandeP0011Repository $demandeP0011Repository,
        DemandeP0012Repository $demandeP0012Repository,
        DemandeP001 $demandeTest,
        Request $request
    ) {


        //dd($demandes);
        $demandes = null;
        $data = [];
        if (isset($request->procedure) && strlen($request->procedure) > 0) {
            $proc = $request->procedure;
            switch ($proc) {
                case 'PETE':
                    $demandes = $demandeP0012Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'DATIPC':
                    $demandes = $demandeP001Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'ADDMC':
                    $demandes = $demandeP003Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'AGDS':
                    $demandes = $demandeP008Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'CEESPNB':
                    $demandes = $demandeP006Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'CDAS':
                    $demandes = $demandeP004Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                    case 'PCBCB2':
                        $demandes = $demandeP005Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;

                case 'PCBCB':
                    $demandes = $demandeP0011Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'OATEA':
                    $demandes = $demandeP002Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;
                case 'CHESPB':
                    $demandes = $demandeP007Repository->all(['usager_id' => Auth::user()->usager->uuid])->sortByDesc('created_at');
                    break;

                default:
                    # code...
                    break;
            }
        }
        $data = [
            "demandes" => $demandes,
            "procedures" => Procedure::all(),
            "selectedProcedure" => $request->procedure,

        ];
        return view('backend.lists_demandesAgents', $data);
    }
}
