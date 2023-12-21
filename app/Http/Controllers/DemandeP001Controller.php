<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP001;
use App\Models\DemandePieceP001;
use App\Models\Procedure;
use App\Models\Usager;
use Illuminate\Http\Request;
use App\Repositories\DemandeP001Repository;
use App\Repositories\DemandePieceP001Repository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DemandeP001Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP001Repository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        return view('create');
    }

    public function create()
    {

        // $data["commune"] = Commune::all();
        // dd($data["commune"]);
        return view('livewire.Demandes.create');
    }

    public function payment($numero, $otp)
    {
        if ($numero && $otp) {
            return true;
        } else {
            return false;
        }
        //return view('livewire.Demandesp0012.create');
    }

    public function store(Request $request, UserRepository $userRepository, DemandePieceP001Repository $demandePieceP001Repository, DemandeP001 $demande)
    {

        $data =  $request->all();

        $validator = Validator::make($request->all(), [
            'avis_faisabilite' => 'required|file|max:5120',
            'rccm' => 'required|file|max:5120',
            'facture_pro_format' => 'required|file|max:5120',
            'fiche_securite' => 'required|file|max:5120',
            'registre_tracabilite' => 'required|file|max:5120',
            'registre_dechet' => 'required|file|max:5120',
            'attestation_destination_finale' => 'required|file|max:5120',
            'list_produit' => 'required|file|max:5120',

            // 3072 correspond à 3 Mo (3 * 1024)
        ]);
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($this->payment($data["numero"], $data["otp"])) {
            $dataFiles = $request->all();

            unset($data['telephone']);
            unset($data['moyen']);
            unset($data["numero"]);
            unset($data["otp"]);

            $data['usager_id'] = Auth::user()->usager_id;
            $data['etat'] = 'D'; //code de procedure demande deposee
            // generation de code reference pour chaque demande
            $data['reference'] = $this->repository->generateReference('P001');
            $data['delai'] = Procedure::where(['code' => 'P001'])->first('delai')->delai;
            $data['paiement']= 1;

            $data['procedure_id'] = Procedure::where(['code' => 'P001'])->first('uuid')->uuid;
            //$data['usager_id']= Auth::user()->uuid;
            // $user = $userRepository->getById(Auth::user()->uuid);
            // $user->telephone = $request->telephone;
            // $user->save();
            //  dd($request->telephone);
            // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

            // $this->repository->create($data);
            //   $pj = new DemandePieceP001();

            // $dataFiles['piece_jointe_id'] =DemandePieceP001::all();
            // dd($dataFiles['piece_jointe_id'] );

            $cheminFaisabilite =  $this->repository->uploadFile($dataFiles, 'avis_faisabilite');
            $cheminRccm =  $this->repository->uploadFile($dataFiles, 'rccm');
            $facture_pro_format =  $this->repository->uploadFile($dataFiles, 'facture_pro_format');
            $cheminFicheSecurite =  $this->repository->uploadFile($dataFiles, 'fiche_securite');
            $registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'registre_tracabilite');
            $registre_dechet =  $this->repository->uploadFile($dataFiles, 'registre_dechet');
            $attestation_destination_finale =  $this->repository->uploadFile($dataFiles, 'attestation_destination_finale');
            $list_produit =  $this->repository->uploadFile($dataFiles, 'list_produit');
            //    dd($cheminFaisabilite, $cheminRccm, $facture_pro_format);
            unset($data['avis_faisabilite']);
            unset($data['rccm']);
            unset($data['facture_pro_format']);
            unset($data['fiche_securite']);
            unset($data['registre_tracabilite']);
            unset($data['registre_dechet']);
            unset($data['attestation_destination_finale']);
            unset($data['list_produit']);

            $demande = $this->repository->create($data);
            $demande->save();
            //    dd($demande->uuid);

            //    $this->repository->uuid();
            $demandePieceP001Repository->setChemin($cheminFaisabilite, $demande->uuid, 'Avis Faisabilite');
            $demandePieceP001Repository->setChemin($cheminRccm, $demande->uuid, 'Rccm');
            $demandePieceP001Repository->setChemin($facture_pro_format, $demande->uuid, 'Facture Pro-Format');
            $demandePieceP001Repository->setChemin($cheminFicheSecurite, $demande->uuid, 'Fiche Securite');
            $demandePieceP001Repository->setChemin($registre_tracabilite, $demande->uuid, 'Registre de Tracabilite');
            $demandePieceP001Repository->setChemin($registre_dechet, $demande->uuid, 'Registre Dechet');
            if(isset($data['attestation_destination_finale'])){

                $demandePieceP001Repository->setChemin($attestation_destination_finale, $demande->uuid, 'Attestation destination Finale');
            }
            $demandePieceP001Repository->setChemin($list_produit, $demande->uuid, 'Liste des poduits');

            return redirect('/demandes-lists?procedure=DATIPC')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
        } else {
        }
    }




    // partie update

    public function update(Request $request, UserRepository $userRepository, DemandePieceP001Repository $demandePieceP001Repository, DemandeP001 $demande)
    {

        $data =  $request->all();

            $dataFiles = $request->all();


        $data['updated_at'] = Carbon::parse(Carbon::now())->format('Ymd');

            $data['etat'] = 'D'; //code de procedure demande deposee
            // generation de code reference pour chaque demande
            $data['delai'] = Procedure::where(['code' => 'P001'])->first('delai')->delai;

            // $data['procedure_id'] = Procedure::where(['code' => 'P001'])->first('uuid')->uuid;
            //$data['usager_id']= Auth::user()->uuid;
            // $user = $userRepository->getById(Auth::user()->uuid);
            // $user->telephone = $request->telephone;
            // $user->save();
            //  dd($request->telephone);
            // $userRepository->updateById(Auth::user()->uuid, array('telephone' => $request->telephone));

            // $this->repository->create($data);
            //   $pj = new DemandePieceP001();

            // $dataFiles['piece_jointe_id'] =DemandePieceP001::all();
            // dd($dataFiles['piece_jointe_id'] );




            unset($data['avis_faisabilite']);
            unset($data['rccm']);
            unset($data['facture_pro_format']);
            unset($data['fiche_securite']);
            unset($data['registre_tracabilite']);
            unset($data['registre_dechet']);
            unset($data['attestation_destination_finale']);
            unset($data['list_produit']);

            unset($data['telephone']);
            unset($data['next']);
            unset($data['current_faisabilite']);
            unset($data['current_rccm']);
            unset($data['current_facture_pro_format']);
            unset($data['current_fiche_securite']);
            unset($data['current_registre_tracabilite']);
            unset($data['current_registre_dechet']);
            unset($data['current_attestation_destination_finale']);
            unset($data['current_list_produit']);

            $this->repository->updateById($request->uuid, $data);
            $demande = $this->repository->getById($request->uuid);

             //Recuperation du chemin des fichiers joint
             if ($request->file('avis_faisabilite')) {
                $cheminFaisabilite =  $this->repository->uploadFile($dataFiles, 'avis_faisabilite ');
                $demandePieceP001Repository->setChemin($cheminFaisabilite, $demande->uuid, 'Avis Faisabilite');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_faisabilite)->delete();
                @unlink($request->current_faisabilite);
            }

            if ($request->file('rccm')) {
                $cheminRccm =  $this->repository->uploadFile($dataFiles, 'rccm');
                $demandePieceP001Repository->setChemin($cheminRccm, $demande->uuid, 'Rccm');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_rccm)->delete();
                @unlink($request->current_rccm);
            }

            if ($request->file('facture_pro_format')) {
                $facture_pro_format =  $this->repository->uploadFile($dataFiles, 'facture_pro_format');
                $demandePieceP001Repository->setChemin($facture_pro_format, $demande->uuid, 'Facture Pro-Format');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_facture_pro_format)->delete();
                @unlink($request->current_facture_pro_format);
            }

            if ($request->file('fiche_securite')) {
                $cheminFicheSecurite =  $this->repository->uploadFile($dataFiles, 'fiche_securite');
                $demandePieceP001Repository->setChemin($cheminFicheSecurite, $demande->uuid, 'Fiche Securite');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_fiche_securite)->delete();
                @unlink($request->current_fiche_securite);
            }

            if ($request->file('registre_tracabilite')) {
                $registre_tracabilite =  $this->repository->uploadFile($dataFiles, 'registre_tracabilite');
                $demandePieceP001Repository->setChemin($registre_tracabilite, $demande->uuid, 'Registre de Tracabilite');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_registre_tracabilite)->delete();
                @unlink($request->current_registre_tracabilite);
            }

            if ($request->file('registre_dechet')) {
                $registre_dechet =  $this->repository->uploadFile($dataFiles, 'registre_dechet');
                $demandePieceP001Repository->setChemin($registre_dechet, $demande->uuid, 'Registre Dechet');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_registre_dechet)->delete();
                @unlink($request->current_registre_dechet);
            }

            if ($request->file('attestation_destination_finale')) {
                $attestation_destination_finale =  $this->repository->uploadFile($dataFiles, 'attestation_destination_finale');
                $demandePieceP001Repository->setChemin($attestation_destination_finale, $demande->uuid, 'Attestation destination Finale');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_attestation_destination_finale)->delete();
                @unlink($request->current_attestation_destination_finale);
            }

            if ($request->file('list_produit')) {

            $list_produit =  $this->repository->uploadFile($dataFiles, 'list_produit');
            $demandePieceP001Repository->setChemin($list_produit, $demande->uuid, 'Liste des poduits');
                DB::table('demande_piece_p001_s')->where('chemin',  $request->current_list_produit)->delete();
                @unlink($request->current_list_produit);
            }

            return redirect('/demandes-lists?procedure=DATIPC')->with('success', 'Votre Demande à bien été Modifiée et en cours de traitement !!');

    }
}
