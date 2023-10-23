<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use App\Models\StatutDemande;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandePieceP001Repository;
use RealRashid\SweetAlert\Facades\Alert;

class BackendController extends Controller
{



    public function index( DemandeP001Repository $demandeP001Repository, DemandePieceP001 $demandePieceP001, DemandeP001 $demandeTest){
        $data = [
             "demandes"=>$demandeTest::with('demandePiece')->get(),
            //  "demandes" => $demandeP001Repository->all(),
            "demandeDeposee" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'en cours')),
            "demandeTraite" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'traite')),
            "demandeRejetter" => $demandeP001Repository->nombre('demande_p001_s', array('etat' =>'rejetter')),
            // "fichiers"=> DemandePieceP001::where
        ];
        return view('backend.home', $data);



    }




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
