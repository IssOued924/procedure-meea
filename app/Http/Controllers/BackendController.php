<?php

namespace App\Http\Controllers;

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
use App\Models\StatutDemande;
use App\Repositories\DemandeP0011Repository;
use App\Repositories\DemandeP0012Repository;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandeP003Repository;
use App\Repositories\DemandeP004Repository;
use App\Repositories\DemandeP007Repository;
use App\Repositories\DemandeP008Repository;
use App\Repositories\DemandePieceP001Repository;
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
          ];
        //   dd($data['demandes'][0]->demandePiece);
        // dd($data['demandeEtat']);

          return view('backend.list_demande', $data);

      }

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
            "demandeEnCours" => $demandeP0012Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
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

    public function statutChange($id)
    {
        $demandep001 = DemandeP001::find($id);
        // dd($demandep001);
        ($demandep001->etat == 'D') ? $demandep001->etat = 1 : $demandep001->etat = 0;
        $demandep001->save();

        if ($demandep001->etat) {
            Alert::success('Demande Verifiee', 'la Demande  a été Verifié avec succès!');
        } else {
            Alert::success('Non  Verifiee', 'la Demande a été Remis a etat initial avec succès!');
        }
        return redirect()->route('demandes-list');
    }







}
