<?php

namespace App\Repositories;
use App\Models\BaseJuridiques;
use App\Models\DemandeP001;
use App\Models\DemandeP0011;
use App\Models\DemandeP0012;
use App\Models\DemandeP002;
use App\Models\DemandeP003;
use App\Models\DemandeP004;
use App\Models\DemandeP005;
use App\Models\DemandeP006;
use App\Models\DemandeP007;
use App\Models\DemandeP008;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

//use Your Model

/**
 * Class BaseJuridiqueRepository.
 */
class AppRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */

    public function model()
    {

    }

    public function generateReference($codeProcedure)
    {
        return 'D'.$codeProcedure.'-'.Carbon::parse(Carbon::now())->format('YmdHis');
    }

    //fonction de chargement
    public function uploadActe($table, array $data, string $name, $id){
        $this->unsetClauses();
        $de = null;
        $libelle = '';
        switch ($table) {
            case 'demande_p001_s':
                $de = new DemandeP001();
                $libelle = 'demandeP001';
                break;
            case 'demande_p002_s':
                $de = new DemandeP002();
                $libelle = 'demandeP002';
                break;
            case 'demande_p003_s':
                $de = new DemandeP003();
                $libelle = 'demandeP003';
                break;
            case 'demande_p004_s':
                $de = new DemandeP004();
                $libelle = 'demandeP004';
                 break;
            case 'demande_p005_s':
                $de = new DemandeP005();
                $libelle = 'demandeP005';
                 break;
            case 'demande_p006_s':
                $de = new DemandeP006();
                $libelle = 'demandeP006';
                break;

            case 'demande_p007_s':
                $de = new DemandeP007();
                $libelle = 'demandeP007';
                 break;
            case 'demande_p008_s':
                 $de = new DemandeP008();
                 $libelle = 'demandeP008';
                 break;
            case 'demande_p0011_s':
                 $de = new DemandeP0011();
                 $libelle = 'demandeP0011';
               break;
            case 'demande_p0012_s':
                $de = new DemandeP0012();
                $libelle = 'demandeP0012';
                break;
            default:
                break;
        }


    $tt = $de->genererRandomString(4);

       $fileName = time().$tt.'.'.$data[$name]->getClientOriginalExtension();
        $url = 'public/'.$libelle;
        Storage::makeDirectory($url);

        $path = $data[$name]->storeAs('public/'.$libelle, $fileName);
        DB::table($table)->where('uuid', $id)->update(['output_file' => $path]);

    }

    public function nombre($table, $champ=array())
    {

        return DB::table($table)->where($champ)->count();


    }


}
