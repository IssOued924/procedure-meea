<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Paiement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Repositories\LogPaiementRepository;
/**
 * Class FacturationRepository.
 */
class FacturationRepository extends BaseRepository {

    /**
     * @return string
     *  Return the model
     */
    public function model() {
        return Paiement::class;
    }

    public function all($filtre = array()) {
        $this->newQuery()->eagerLoad();
        $models = $this->query->where($filtre)->get();
        $this->unsetClauses();
        return $models;
    }

    /* Toutes le sdemandes en attente de pauement dans une meme liste */

    public function getAllDemandeToPay($filtre = array()) {
        $userDirection = Auth::user()->agent->service->libelle_court;
        $p001 = DB::table('demande_p001_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p001_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p001_s.commune_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p001_s.uuid',
            'demande_p001_s.reference',
            'demande_p001_s.paiement',
            'demande_p001_s.denomination_sociale_demandeur as demandeur',
            'demande_p001_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p001_s.created_at']);
        $p002 = DB::table('demande_p002_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p002_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p002_s.commune_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p002_s.uuid',
            'demande_p002_s.reference',
            'demande_p002_s.paiement',
            'demande_p002_s.identite as demandeur',
            'demande_p002_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p002_s.created_at']);

        $p003 = DB::table('demande_p003_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p003_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p003_s.commune_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p003_s.uuid',
            'demande_p003_s.reference',
            'demande_p003_s.paiement',
            'demande_p003_s.identite as demandeur',
            'demande_p003_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p003_s.created_at']);

        $p004 = DB::table('demande_p004_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p004_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p004_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p004_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p004_s.uuid',
            'demande_p004_s.reference',
            'demande_p004_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            // 'usagers.identite as demandeur', 
            'demande_p004_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p004_s.created_at']);

        $p005 = DB::table('demande_p005_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p005_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p005_s.commune_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p005_s.uuid',
            'demande_p005_s.reference',
            'demande_p005_s.paiement',
            'demande_p005_s.identite as demandeur',
            'demande_p005_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p005_s.created_at']);

        $p006 = DB::table('demande_p006_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p006_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p006_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p006_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p006_s.uuid',
            'demande_p006_s.reference',
            'demande_p006_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            'demande_p006_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p006_s.created_at']);

        $p007 = DB::table('demande_p007_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p007_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p007_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p007_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p007_s.uuid',
            'demande_p007_s.reference',
            'demande_p007_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            'demande_p007_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p007_s.created_at']);

        $p008 = DB::table('demande_p008_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p008_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p008_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p008_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p008_s.uuid',
            'demande_p008_s.reference',
            'demande_p008_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            'demande_p008_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p008_s.created_at']);

        $p011 = DB::table('demande_p0011_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p0011_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p0011_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p0011_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p0011_s.uuid',
            'demande_p0011_s.reference',
            'demande_p0011_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            'demande_p0011_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p0011_s.created_at']);

        $p012 = DB::table('demande_p0012_s')
                ->join('procedures', 'procedures.uuid', '=', 'demande_p0012_s.procedure_id')
                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                ->join('communes', 'communes.uuid', '=', 'demande_p0012_s.commune_id')
                ->join('usagers', 'usagers.uuid', '=', 'demande_p0012_s.usager_id')
                ->where('active_paiement', false)
                ->where($filtre)
                ->where('services.libelle_court', $userDirection)
                ->get(['demande_p0012_s.uuid',
            'demande_p0012_s.reference',
            'demande_p0012_s.paiement',
            DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
            'demande_p0012_s.etat',
            'procedures.code as procedure',
            'procedures.libelle_long as procedure_libelle',
            'procedures.delai',
            'services.libelle_court as direction',
            'communes.libelle as residence',
            'demande_p0012_s.created_at']);

        $allDemandes = $p001->merge($p002)->merge($p003)
                        ->merge($p004)->merge($p005)->merge($p006)
                        ->merge($p007)->merge($p008)->merge($p011)->merge($p012);
        return $allDemandes;
    }

    public function getDemandeByIdToPay($id, $procedure) {
        $demande = null;
        switch ($procedure) {
            case 'P001':
                $demande = DB::table('demande_p001_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p001_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p001_s.commune_id')
                                ->where('demande_p001_s.uuid', $id)
                                ->select('demande_p001_s.uuid',
                                        'demande_p001_s.reference',
                                        'demande_p001_s.paiement',
                                        'demande_p001_s.denomination_sociale_demandeur as demandeur',
                                        'demande_p001_s.etat',
                                        'demande_p001_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p001_s.created_at')->first();
                break;
            case 'P002':
                $demande = DB::table('demande_p002_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p002_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p002_s.commune_id')
                                ->where('demande_p002_s.uuid', $id)
                                ->select('demande_p002_s.uuid',
                                        'demande_p002_s.reference',
                                        'demande_p002_s.paiement',
                                        'demande_p002_s.identite as demandeur',
                                        'demande_p002_s.etat',
                                        'demande_p002_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p002_s.created_at')->first();
                break;
            case 'P003':
                $demande = DB::table('demande_p003_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p003_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p003_s.commune_id')
                                ->where('demande_p003_s.uuid', $id)
                                ->select('demande_p003_s.uuid',
                                        'demande_p003_s.reference',
                                        'demande_p003_s.paiement',
                                        'demande_p003_s.identite as demandeur',
                                        'demande_p003_s.etat',
                                        'demande_p003_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p003_s.created_at')->first();
                break;
            case 'P004':
                $demande = DB::table('demande_p004_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p004_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p004_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p004_s.usager_id')
                                ->where('demande_p004_s.uuid', $id)
                                ->select('demande_p004_s.uuid',
                                        'demande_p004_s.reference',
                                        'demande_p004_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p004_s.etat',
                                        'demande_p004_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p004_s.created_at')->first();
                break;
            case 'P005':
                $demande = DB::table('demande_p005_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p005_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p005_s.commune_id')
                                ->where('demande_p005_s.uuid', $id)
                                ->select('demande_p005_s.uuid',
                                        'demande_p005_s.reference',
                                        'demande_p005_s.paiement',
                                        'demande_p005_s.identite as demandeur',
                                        'demande_p005_s.etat',
                                        'demande_p005_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p005_s.created_at')->first();
                break;
            case 'P006':
                $demande = DB::table('demande_p006_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p006_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p006_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p006_s.usager_id')
                                ->where('demande_p006_s.uuid', $id)
                                ->select('demande_p006_s.uuid',
                                        'demande_p006_s.reference',
                                        'demande_p006_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p006_s.etat',
                                        'demande_p006_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p006_s.created_at')->first();
                break;
            case 'P007':
                $demande = DB::table('demande_p007_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p007_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p007_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p007_s.usager_id')
                                ->where('demande_p007_s.uuid', $id)
                                ->select('demande_p007_s.uuid',
                                        'demande_p007_s.reference',
                                        'demande_p007_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p007_s.etat',
                                        'demande_p007_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p007_s.created_at')->first();
                break;
            case 'P008':
                $demande = DB::table('demande_p008_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p008_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p008_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p008_s.usager_id')
                                ->where('demande_p008_s.uuid', $id)
                                ->select('demande_p008_s.uuid',
                                        'demande_p008_s.reference',
                                        'demande_p008_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p008_s.etat',
                                        'demande_p008_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p008_s.created_at')->first();
                break;
            case 'P0011':
                $demande = DB::table('demande_p0011_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p0011_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p0011_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p0011_s.usager_id')
                                ->where('demande_p0011_s.uuid', $id)
                                ->select('demande_p0011_s.uuid',
                                        'demande_p0011_s.reference',
                                        'demande_p0011_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p0011_s.etat',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'demande_p0011_s.montant',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p0011_s.created_at')->first();
                break;
            case 'P0012':
                $demande = DB::table('demande_p0012_s')
                                ->join('procedures', 'procedures.uuid', '=', 'demande_p0012_s.procedure_id')
                                ->join('services', 'services.uuid', '=', 'procedures.service_id')
                                ->join('communes', 'communes.uuid', '=', 'demande_p0012_s.commune_id')
                                ->join('usagers', 'usagers.uuid', '=', 'demande_p0012_s.usager_id')
                                ->where('demande_p0012_s.uuid', $id)
                                ->select('demande_p0012_s.uuid',
                                        'demande_p0012_s.reference',
                                        'demande_p0012_s.paiement',
                                        DB::raw('CONCAT(usagers.nom, " ", usagers.prenom) AS demandeur'),
                                        'demande_p0012_s.etat',
                                        'demande_p0012_s.montant',
                                        'procedures.code as procedure',
                                        'procedures.libelle_long as procedure_libelle',
                                        'procedures.delai',
                                        'services.libelle_court as direction',
                                        'communes.libelle as residence',
                                        'demande_p0012_s.created_at')->first();
                break;
            default:
                return redirect()->back();
                break;
        }
        return $demande;
    }

    public function getPaiementById($id) {
        $this->unsetClauses();

        $this->newQuery()->eagerLoad();

        return $this->query->where('.uuid', $id)->first();
    }
    
    public function updateDemandeAfterPayment($id, $procedure) {
        $nbAffected = 0;
        switch ($procedure) {
            case 'P001':
                $nbAffected = DB::table('demande_p001_s')
                                ->where('demande_p001_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P002':
                $nbAffected = DB::table('demande_p002_s')
                                ->where('demande_p002_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P003':
                $nbAffected = DB::table('demande_p003_s')
                               ->where('demande_p003_s.uuid', $id)
                               ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P004':
                $nbAffected = DB::table('demande_p004_s')
                                ->where('demande_p004_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P005':
                $nbAffected = DB::table('demande_p005_s')
                                ->where('demande_p005_s.uuid', $id)
                               ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P006':
                $nbAffected = DB::table('demande_p006_s')
                                ->where('demande_p006_s.uuid', $id)
                               ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P007':
                $nbAffected = DB::table('demande_p007_s')
                                ->where('demande_p007_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P008':
                $nbAffected = DB::table('demande_p008_s')
                                ->where('demande_p008_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P0011':
                $nbAffected = DB::table('demande_p0011_s')
                                ->where('demande_p0011_s.uuid', $id)
                                ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P0012':
                $nbAffected = DB::table('demande_p0012_s')
                                ->where('demande_p0012_s.uuid', $id)
                               ->update(['paiement' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            default:
                return redirect()->back();
                break;
        }
        return $nbAffected;
    }
    
    public function deletePaiement($id, $procedure) {
        $nbAffected = 0;
        $update = DB::table('paiements')->where('demande_id', $id)->update(['is_deleted' => true,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid,'deleted_by' => Auth::user()->uuid]);
              
        switch ($procedure) {
            case 'P001':
                $nbAffected = DB::table('demande_p001_s')
                                ->where('demande_p001_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P002':
                $nbAffected = DB::table('demande_p002_s')
                                ->where('demande_p002_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P003':
                $nbAffected = DB::table('demande_p003_s')
                               ->where('demande_p003_s.uuid', $id)
                               ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P004':
                $nbAffected = DB::table('demande_p004_s')
                                ->where('demande_p004_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P005':
                $nbAffected = DB::table('demande_p005_s')
                                ->where('demande_p005_s.uuid', $id)
                               ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P006':
                $nbAffected = DB::table('demande_p006_s')
                                ->where('demande_p006_s.uuid', $id)
                               ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P007':
                $nbAffected = DB::table('demande_p007_s')
                                ->where('demande_p007_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P008':
                $nbAffected = DB::table('demande_p008_s')
                                ->where('demande_p008_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P0011':
                $nbAffected = DB::table('demande_p0011_s')
                                ->where('demande_p0011_s.uuid', $id)
                                ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            case 'P0012':
                $nbAffected = DB::table('demande_p0012_s')
                                ->where('demande_p0012_s.uuid', $id)
                               ->update(['paiement' => false,'updated_at' => Carbon::now(),'updated_by' => Auth::user()->uuid]);
                break;
            default:
                return redirect()->back();
                break;
        }
        /* Création de log */
        $logPaiementRepository = new LogPaiementRepository();
        $rowPaiement = DB::table('paiements')
                                ->where('demande_id', $id)
                                ->orderBy('created_at', 'DESC')
                                ->first();
        $dataLog = [
            'montant' => 0,
            'action' => 'Annulation',
            'paiement_id' => $rowPaiement->uuid,
            'created_by' => Auth::user()->uuid,
            'updated_by' => Auth::user()->uuid,
            ];
            $log = $logPaiementRepository->create($dataLog);
            $log->save();
        return $nbAffected;
    }
    
    public function getSituationByProcedure($from='', $to='') {
        $listeDirection=['DGEF','DGRE','DGPE'];
        $userDirection = Auth::user()->agent->service->libelle_court;
        $situation = DB::table('view_from_all_demandes')
                            ->where('paiement', true)
                            ->where(DB::raw('DATE_FORMAT(created_at, "%Y")'), Carbon::parse(Carbon::now())->format('Y'));
                    if(in_array($userDirection, $listeDirection)){
                        $situation = $situation->where('direction', $userDirection);
                    }
                            
        if(strlen($from)> 0 && strlen($to)> 0) {
          $situation = $situation->whereBetween('created_at', [$from, $to]);  
        }     
        $situation = $situation->groupBy('procedure')
                                ->selectRaw('procedure_libelle, sum(montant) as montant')
                                ->get();
                                
        return $situation;
    }
    
}
