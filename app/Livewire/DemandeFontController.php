<?php

namespace App\Livewire;

use App\Models\Commune;
use App\Models\Pays;
use App\Models\Demande;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Intervention\Image\Facades\Image;
use Symfony\Component\VarDumper\VarDumper;
use Illuminate\Http\Request;
use App\Models\DemandeP001;
use App\Models\DemandeP0010;
use App\Models\DemandeP0011;
use App\Models\DemandeP004;
use App\Models\DemandeP0012;
use App\Models\DemandeP003;
use App\Models\DemandeP006;
use App\Models\DemandeP007;
use App\Models\DemandeP008;
use App\Models\DemandeP002;
use App\Models\DemandeP005;
use App\Models\DemandePieceP001;
use App\Models\DemandePieceP0010;
use App\Models\DemandePieceP0011;
use App\Models\DemandePieceP0012;
use App\Models\DemandePieceP002;
use App\Models\DemandePieceP003;
use App\Models\DemandePieceP004;
use App\Models\DemandePieceP005;
use App\Models\DemandePieceP006;
use App\Models\DemandePieceP007;
use App\Models\DemandePieceP008;

class DemandeFontController extends Component
{

    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = "bootstrap";


    public $search;
    public $updateMode = false;
    public $currentPage = PAGECREATEFORM;

    public function render(Request $request)
    {

        $id = $request->id;
        $procedure = $request->procedure ;

        Carbon::setLocale("fr");
        $searchCriteria = "%".$this->search."%";

        $demande = null;
        $data = [];
        $view ='';
        $documents = null;
        if (isset($procedure) && strlen($procedure) > 0) {
            switch ($procedure) {
                case 'PETE':
                    $demande = DemandeP0012::where(['uuid' => $id])->first();
                    $documents = DemandePieceP0012::where(['demande_p0012_id' => $id])->get();
                    $view ='livewire.Demandesp0012.edit';
                    $data = [
                        "demande" =>$demande,
                        "documents" =>$documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                        "communes" => Commune::all(),
                    ];
                    break;
                case 'DATIPC':
                    $demande = DemandeP001::where(['uuid' => $id])->first();
                    $documents = DemandePieceP001::where(['demande_p001_id' => $id])->get();
                    $view ='livewire.Demandes.edit';
                    $data = [
                        "demandes" => Demande::where("libelle_court", "like", $searchCriteria)->latest()->paginate(5),
                        "demande" => $demande,
                        "documents"  => $documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "communes" => Commune::all(),
                        "identite" => Auth::user()->usager->nom. ' '.  Auth::user()->usager->prenom,
                        "default_pays" => Auth::user()->usager->pays,
                        "pays" => Pays::all(),
                    ];
                    break;
                case 'ADDMC':
                    $demande = DemandeP003::where(['uuid' => $id])->first();
                    $documents = DemandePieceP003::where(['demande_p003_id' => $id])->get();
                    $view ='livewire.Demandesp003.edit';
                    $data = [
                        "demande" =>$demande,
                        "documents" =>$documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                        "communes" => Commune::all(),

                    ];
                    break;
                case 'AGDS':
                    $demande = DemandeP008::where(['uuid' => $id])->first();
                    $documents = DemandePieceP008::where(['demande_p008_id' => $id])->get();
                    $view ='livewire.Demandesp008.edit';
                    $data = [
                        "demande" => $demande,
                        "documents" => $documents,
                        "telephone" => Auth::user()->telephone,
                        "communes" => Commune::all(),
                    ];
                    break;
                case 'CEESPNB':
                    $demande = DemandeP006::where(['uuid' => $id])->first();
                    $documents = DemandePieceP006::where(['demande_p006_id' => $id])->get();
                    $view ='livewire.Demandesp006.edit';
                    $data = [
                        "demande" => $demande,
                        "documents" => $documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                        "communes" => Commune::all(),

                    ];
                    break;
                case 'CDAS':
                    $demande = DemandeP004::where(['uuid' => $id])->first();
                    $documents = DemandePieceP004::where(['demande_p004_id' => $id])->get();
                    $view ='livewire.DemandesP004.edit';
                    $data = [
                        "demande" => $demande,
                        "documents" => $documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "communes" => Commune::all(),
                        "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                        "pays" => Pays::all(),
                    ];
                    break;
                case 'PCBCB':
                    $demande = DemandeP0011::where(['uuid' => $id])->first();
                    $documents = DemandePieceP0011::where(['demande_p0011_id' => $id])->get();
                    $view ='livewire.Demandesp0011.edit';
                    $data = [
                            "demande" => $demande,
                            "documents" => $documents,
                            "telephone" => Auth::user()->usager->telephone,
                            "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                            "communes" => Commune::all(),
                        ];
                    break;

                    case 'PCBCB2':
                        $demande = DemandeP005::where(['uuid' => $id])->first();
                        $documents = DemandePieceP005::where(['demande_p005_id' => $id])->get();
                        $view ='livewire.Demandep005.edit';
                        $data = [
                                "demande" => $demande,
                                "telephone" => Auth::user()->usager->telephone,
                                "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                                "communes" => Commune::all(),
                            ];
                        break;
                case 'OATEA':
                    $demande = DemandeP002::where(['uuid' => $id])->first();
                    $documents = DemandePieceP002::where(['demande_p002_id' => $id])->get();
                    $view ='livewire.Demandes-p002.edit';
                    $data = [
                        "demande" => $demande,
                        "documents" => $documents,
                        "telephone" => Auth::user()->telephone,
                        "communes" => Commune::all(),
                        "pays" => Pays::all(),
                        "identite" => Auth::user()->usager->nom. ' '.  Auth::user()->usager->prenom,
                        "default_pays" => Auth::user()->usager->pays
                    ];
                    break;
                case 'CHESPB':
                    $demande = DemandeP007::where(['uuid' => $id])->first();
                    $documents = DemandePieceP007::where(['demande_p007_id' => $id])->get();
                    $view ='livewire.DemandesP007.edit';
                    $data = [
                        "demande" => $demande,
                        "documents" => $documents,
                        "telephone" => Auth::user()->usager->telephone,
                        "name" => Auth::user()->usager->nom.' '.Auth::user()->usager->prenom,
                        "communes" => Commune::all(),
                        "pays" => Pays::all(),
                    ];
                    break;

                default:
                    # code...
                    break;
            }

        }


        return view($view, $data)
            ->extends("layouts.template")
            ->section("contenu");
    }

}
