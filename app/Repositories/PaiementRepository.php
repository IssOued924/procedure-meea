<?php

namespace App\Repositories;

use App\Models\Paiement;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Pooldevmtdpce\Payment\Payment as PoolPaiement;


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
      
      return Paiement::class;    
      
    }
    public function paiementOrange($montant, $numberUser, $codeOtp,$demande_id,$code_procedure)
    {
     $paiementOM=\Pooldevmtdpce\Payment\Payment::payOrange($montant, $numberUser, $codeOtp);
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

   public function paiementOrange_($montant, $numberUser, $codeOtp)
    {
      //return '';
     $paiementOM=  PoolPaiement::payOrange($montant, $numberUser, $codeOtp);
     $paiement = null;
        
        $paiement = [
        'status'=>$paiementOM->getStatus(),
        'ref_paiement'=>$paiementOM->getTransactionId() ? $paiementOM->getTransactionId() : null,
        'date_paiement'=>now(),
        'message'=>$paiementOM->getMessage() ? $paiementOM->getMessage() : null
        ];

        return $paiement;
     }
     
    }


