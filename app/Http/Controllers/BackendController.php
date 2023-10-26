<?php

namespace App\Http\Controllers;

use App\Models\Agent;
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

class BackendController extends Controller
{



    public function index( DemandeP001Repository $demandeP001Repository, DemandePieceP001 $demandePieceP001, DemandeP001 $demandep001){
        $data = [
             "demandes"=>$demandep001::with('demandePiece')->get(),
            //  "demandes" => $demandeP001Repository->all(),
            "demandeDeposee" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
            "demandeTraite" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'traite')),
            "demandeRejetter" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'rejetter')),
            // "fichiers"=> DemandePieceP001::where
        ];
        return view('backend.home', $data);



    }



                    // Recuperation de la list des demande concernant p001 Produi chimique
    public function listDemande( DemandeP001Repository $demandeP001Repository,  DemandeP001 $demandeTest){
        // dd( StatutDemande::where('etat', '=', 'V')->first()->statut);
          $data = [
              "demandes" => $demandeP001Repository->all(),
              "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
              "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
              "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
              "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
              "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
              "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
              "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
            //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
              "demandeEnCours" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
              "demandeEtat" => $demandeTest->statut(),
              "agents" => Agent::all(),
          ];

        //   dd($data['demandes'][0]->demandePiece);


          return view('backend.list_demande', $data);

      }

    //   dd($data);

    //   liste des demandes de la procedure ecotourisme p0012

    public function listDemandep0012( DemandeP0012Repository $demandeP0012Repository,  DemandeP0012 $demandep0012){



        $data = [
            "demandes" => $demandeP0012Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP0012Repository->nombre('demande_p0012_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandep0012->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep0012', $data);

    }

     //   liste des demandes de la procedure gestion des dechets p008

     public function listDemandep008( DemandeP008Repository $demandeP008Repository,  DemandeP008 $demandep008){

        $data = [
            "demandes" => $demandeP008Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP008Repository->nombre('demande_p008_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandep008->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep008', $data);

    }

     //   liste des demandes de permis de chasse des dechets p003

     public function listDemandep003( DemandeP003Repository $demandeP003Repository,  DemandeP003 $demandep003){

        $data = [
            "demandes" => $demandeP003Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP003Repository->nombre('demande_p003_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandep003->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep003', $data);

    }


       //   liste des demandes de permis de detention dun animal p004

       public function listDemandep004( DemandeP004Repository $demandeP004Repository,  DemandeP004 $demandep004){

        $data = [
            "demandes" => $demandeP004Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP004Repository->nombre('demande_p004_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandep004->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep004', $data);

    }

      //   liste des demandes de permis de detention dun animal p004

      public function listDemandep0011( DemandeP0011Repository $demandeP0011Repository,  DemandeP0011 $demandeP0011){

        $data = [
            "demandes" => $demandeP0011Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP0011Repository->nombre('demande_p004_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandeP0011->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep0011', $data);

    }

      //   liste des demandes de permis de detention dun animal p006

      public function listDemandep006( DemandeP0011Repository $demandeP006Repository,  DemandeP006 $demandeP006){

        $data = [
            "demandes" => $demandeP006Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP006Repository->nombre('demande_p004_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandeP006->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep006', $data);

    }



      //   liste des demandes de permis de detention dun animal p004

      public function listDemandep007( DemandeP007Repository $demandeP007Repository,  DemandeP007 $demandeP007){

        $data = [
            "demandes" => $demandeP007Repository->all(),
            "statutDepose"=> StatutDemande::where('etat', '=', 'D')->first()->statut,
            "statutArchive"=> StatutDemande::where('etat', '=', 'A')->first()->statut,
            "statutRejete"=> StatutDemande::where('etat', '=', 'R')->first()->statut,
            "statutEtude"=> StatutDemande::where('etat', '=', 'E')->first()->statut,
            "statutComplement"=> StatutDemande::where('etat', '=', 'C')->first()->statut,
            "statutSigne"=> StatutDemande::where('etat', '=', 'S')->first()->statut,
            "statutValide"=> StatutDemande::where('etat', '=', 'V')->first()->statut,
          //   "demandes"=>$demandeTest::where(['demande_p001_id',' =>', $demandeTest->demandePiece])->get(),
            "demandeEnCours" => $demandeP007Repository->nombre('demande_p007_s', array('etat' =>'en cours')),
            "demandeEtat" => $demandeP007->statut(),
        ];
      //   dd($data['demandes'][0]->demandePiece);
      // dd($data['demandeEtat']);

        return view('backend.list_demandep007', $data);

    }



      //Function de mise a jour de statut demande

    public function statutChange($id, $currentStatus, $table )

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
        DB::table($table)->where('uuid', $id)->update(['etat'=> $nextStatus]);


        return redirect()->back()->with('success', "La Demande a été Valider avec succès !");
    }

    public function rejetter($id, $table)
    {
        DB::table($table)->where('uuid', $id)->update(['etat'=> 'R']);

        return redirect()->back()->with('success', "La Demande a été Rejetter avec succès !");

    }




    public function nombreDemandeByProcedure(DemandeP001Repository $demandeP001Repository,
																	DemandeP004Repository $demandeP004Repository,
																	DemandeP008Repository $demandeP008Repository,
																	DemandeP0011Repository $demandeP0011Repository,
																	DemandeP003Repository $demandeP003Repository,
																	DemandeP0012Repository $demandeP0012Repository,
																	DemandeP006Repository $demandeP006Repository,
																	DemandeP007Repository $demandeP007Repository

                                                                    ) {

       print json_encode(array('status' => 'success',
								"nbProchimique" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'D')),
								"nbEcotourisme" => $demandeP0012Repository->nombre('demande_p0012_s', array('etat' =>'D')),
								'nbdechet' => $demandeP008Repository->nombre('demande_p008_s', array('etat' =>'D')),
								'nbpchasse' => $demandeP003Repository->nombre('demande_p003_s', array('etat' =>'D')),
								'nbdetention' => $demandeP004Repository->nombre('demande_p004_s', array('etat' =>'D')),
								'nbce' => $demandeP006Repository->nombre('demande_p006_s', array('etat' =>'D')),
								'nbhomologation' => $demandeP007Repository->nombre('demande_p007_s', array('etat' =>'D')),
								'nbcoupe' => $demandeP0011Repository->nombre('demande_p0011_s', array('etat' =>'D')),

                        ));
    }



    public function listsDemande(DemandeP001Repository $demandeP001Repository, 
                                        DemandeP002Repository $demandeP002Repository, 
                                        DemandeP003Repository $demandeP003Repository,
                                        DemandeP004Repository $demandeP004Repository, 
                                        DemandeP006Repository $demandeP006Repository, 
                                        DemandeP007Repository $demandeP007Repository,
                                        DemandeP008Repository $demandeP008Repository, 
                                        DemandeP0011Repository $demandeP0011Repository, 
                                        DemandeP0012Repository $demandeP0012Repository,
                                          DemandeP001 $demandeTest,Request $request){

      
     //dd($demandes);                                  
      $demandes = null;
      $data = [];
      if(isset($request->procedure) && strlen($request->procedure)>0){
        $proc = $request->procedure;
          switch ($proc) {
            case 'PETE':
              $demandes = $demandeP0012Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
              break;
            case 'DATIPC':
              $demandes = $demandeP001Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
              break;
            case 'ADDMC':
              $demandes = $demandeP003Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
                break;
            case 'AGDS':
                  $demandes = $demandeP008Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
                  break;
            case 'CEESPNB':
                  $demandes = $demandeP006Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
                  break;
            case 'CDAS':
              $demandes = $demandeP004Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
                break;
            case 'PCBCB':
              $demandes = $demandeP0011Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
                  break;
            case 'OATEA':
              $demandes = $demandeP002Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
              break;
            case 'CHESPB':
              $demandes = $demandeP007Repository->all(['usager_id'=>Auth::user()->usager->uuid]);
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

