<?php

namespace App\Repositories;

use App\Models\Paiement;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;


//use Your Model

/**
 * Class PaiementRepository.
 */
class PaiementRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
    
    }
    public function paiementOrange($montant, $numberUser, $codeOtp,$demande_id,$code_procedure)
    {
     $paiementOM=\Pooldevmtdpce\Payment\Paiement::payOrange($montant, $numberUser, $codeOtp);
     $paiement = null;
        $paiement = Paiement::create([
        'ref_paiement'=>$paiementOM->getTransactionId(),
        'date_paiement'=>now(),
        'code_procedure'=>$code_procedure,
        'demande_id'=>$demande_id,
        'message'=>$paiementOM->getMessage()
        ]);
        return $paiementOM->getStatus();
     }
     
    }


