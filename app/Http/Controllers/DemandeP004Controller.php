<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use App\Models\DemandeP004;
use App\Models\DemandePieceP004;
use App\Models\Procedure;
use App\Models\Usager;
use Illuminate\Http\Request;
use App\Repositories\DemandeP004Repository;
use App\Repositories\DemandePieceP004Repository;
use App\Repositories\UserRepository;
use Carbon\Carbon;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DemandeP004Controller extends Controller
{
    public $repository;
    public function __construct(DemandeP004Repository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        return view('create');
    }

    public function create()
    {
        return view('livewire.DemandesP004.create');
    }

    public function store(Request $request, UserRepository $userRepository, DemandePieceP004Repository $demandePieceP004Repository, DemandeP004 $demande)
    {

        $data =  $request->all();

        $validator = Validator::make($request->all(), [
            'certificat_origine' => 'required|file|max:3072', 
            'certificat_sanitaire' => 'required|file|max:3072', 
          
          
            // 3072 correspond à 3 Mo (3 * 1024)
        ]);
        if ($validator->fails()) {
            session()->flash('error', 'La taille des fichiers ne doivent pas excéder 3 Mo.');
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $dataFiles = $request->all();

        unset($data['telephone']);
        unset($data['moyen']);
        unset($data["numero"]);
        unset($data["otp"]);
        $data['usager_id'] = Auth::user()->usager_id;
        $data['etat'] = 'D'; //code de procedure demande deposee

        $data['reference'] = $this->repository->generateReference('P004');
        $data['delai'] = Procedure::where(['code' => 'P004'])->first('delai')->delai;
        $data['procedure_id'] = Procedure::where(['code' => 'P004'])->first('uuid')->uuid;
        $data['paiement'] =1;
        $certificat_origine =  $this->repository->uploadFile($dataFiles, 'certificat_origine');
        $certificat_sanitaire =  $this->repository->uploadFile($dataFiles, 'certificat_sanitaire');
        unset($data['certificat_origine']);
        unset($data['certificat_sanitaire']);
        unset($data['nom']);

        $demande = $this->repository->create($data);
        $demande->save();
        //    dd($demande->uuid);

        //    $this->repository->uuid();
        $demandePieceP004Repository->setChemin($certificat_origine, $demande->uuid, 'Certificat Origine');
        $demandePieceP004Repository->setChemin($certificat_sanitaire, $demande->uuid, 'Certificat Sanitaire');


        return redirect('/demandes-lists?procedure=CDAS')->with('success', 'Votre Demande à bien été Soumise et en cours de traitement !!');
    }

    // modification des demandes

    public function update(Request $request, UserRepository $userRepository, DemandePieceP004Repository $demandePieceP004Repository, DemandeP004 $demande)
    {

        $data =  $request->all();
        $dataFiles = $request->all();

        unset($data['telephone']);
        unset($data['nom']);
        $data['etat'] = 'D'; //code de procedure demande deposee
        $data['updated_at'] = Carbon::parse(Carbon::now())->format('Ymd');

        $data['delai'] = Procedure::where(['code' => 'P004'])->first('delai')->delai;

        unset($data['certificat_origine']);
        unset($data['certificat_sanitaire']);

        unset($data['current_certificat_origine']);
        unset($data['current_certificat_sanitaire']);

       $this->repository->updateById($request->uuid, $data);
       $demande = $this->repository->getById($request->uuid);
        //    dd($demande->uuid);


        //Recuperation du chemin des fichiers joint
       if ($request->file('certificat_origine')) {
        $certificat_origine =  $this->repository->uploadFile($dataFiles, 'certificat_origine');
        $demandePieceP004Repository->setChemin($certificat_origine, $demande->uuid, 'Certificat Origine');
         DB::table('demande_piece_p004_s')->where('chemin',  $request->current_certificat_origine)->delete();
         @unlink($request->current_certificat_origine);
     }

     if ($request->file('certificat_sanitaire')) {
        $certificat_sanitaire =  $this->repository->uploadFile($dataFiles, 'certificat_sanitaire');
        $demandePieceP004Repository->setChemin($certificat_sanitaire, $demande->uuid, 'Certificat Sanitaire');
         DB::table('demande_piece_p004_s')->where('chemin',  $request->current_certificat_sanitaire)->delete();
         @unlink($request->current_certificat_sanitaire);
     }

        return redirect('/demandes-lists?procedure=CDAS')->with('success', 'Votre Demande à bien été Modifiée et en cours de traitement !!');
    }
}
