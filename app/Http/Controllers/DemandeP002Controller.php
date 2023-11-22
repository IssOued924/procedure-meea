<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP002;
use App\Models\DemandePieceP002;
use App\Models\Procedure;
use App\Models\Usager;
use Illuminate\Http\Request;
use App\Repositories\DemandePieceP002Repository;
use App\Repositories\UserRepository;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;
use App\Repositories\DemandeP002Repository;
use Carbon\Carbon;
use App\Http\Requests\StoreDemandeP002Request;

class DemandeP002Controller extends Controller {

    public $repository;

    public function __construct(DemandeP002Repository $repository) {
        $this->repository = $repository;
    }

    public function store(StoreDemandeP002Request $request,
            DemandePieceP002Repository $demandePieceP002Repository,
            DemandeP002 $demande) {
        $dataDemande = ['etat' => 'D',
            'date_demande' => Carbon::parse(Carbon::now())->format('Ymd'),
            'identite' => $request->identite,
            'beneficiaire' => $request->beneficiaire,
            //'montant' =>0,
            //  'delai' =>'D',
            //  'adresse_beneficiaire' =>'D',
            'procedure_id' => Procedure::where(['code' => 'P002'])->first('uuid')->uuid,
            'delai' => Procedure::where(['code' => 'P002'])->first('delai')->delai,
            'paiement' => 1,
            'date_certif' => Carbon::parse(Carbon::now())->format('Ymd'),
            'usager_id' => Auth::user()->usager_id,
            'last_modified_by' => Auth::user()->usager_id,
            'is_certified' => true,
            'reference' => $this->repository->generateReference('P002'),
            'domaine' => $request->domaine,
            'categorie' => $request->categorie,
            'sous_domaine' => $request->sous_domaine];

        // Sauvegarde de la demande

        $demande = $this->repository->create($dataDemande);
        $demande->save();
        //Recuperation du chemin des fichiers joint
            $cheminRecuAchat = $this->repository->uploadFile($request->file('recu_achat_dossier'));
            $cheminifu = $this->repository->uploadFile($request->file('ifu'));
            $cheminRccm = $this->repository->uploadFile($request->file('rccm'));
            $cheminCnss = $this->repository->uploadFile($request->file('cnss'));
            $cheminFicheRenseignement = $this->repository->uploadFile($request->file('fiche_renseignement'));
            $cheminDeclarationHonneur = $this->repository->uploadFile($request->file('declaration_honneur'));

            //Enregistement des fchiers joints
            $demandePieceP002Repository->setChemin($cheminRecuAchat, $demande->uuid, 'Récu achat dossier');
            $demandePieceP002Repository->setChemin($cheminifu, $demande->uuid, 'Certificat Ifu');
            $demandePieceP002Repository->setChemin($cheminRccm, $demande->uuid, 'Rccm');
            $demandePieceP002Repository->setChemin($cheminCnss, $demande->uuid, 'Attestation employeur CNSS');
            $demandePieceP002Repository->setChemin($cheminFicheRenseignement, $demande->uuid, 'Fiche Renseignement');
            $demandePieceP002Repository->setChemin($cheminDeclarationHonneur, $demande->uuid, 'Déclaration sur l’honneur de l’exactitude des informations');

            //Enregistrement des autres documents
            if ($request->libelle_document && sizeof($request->libelle_document) > 0) {
                $n = sizeof($request->libelle_document);
                for ($i = 0; $i < $n; $i++) {
                    $chemin = $this->repository->uploadFile($request->file('fichier_document')[$i]);
                    $demandePieceP002Repository->setChemin($chemin, $demande->uuid, $request->libelle_document[$i]);
                }
            }
          // return json_encode(array('status' => 'success'));
        return redirect('/demandes-lists')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
        //return json_encode(array('status' => 'fail'));
    }

}
