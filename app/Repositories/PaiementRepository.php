<?php

namespace App\Repositories;

use Exception;
use App\Models\Paiement;
use App\Models\Procedure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
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
      
      return Paiement::class;    
      
    }
    public function paiementOrange($montant, $numberUser, $codeOtp,$demande_id,$code_procedure)
    {
     $paiementOM=$this->payOrange($montant, $numberUser, $codeOtp);
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

       public function paiementOrange_($proc, $numberUser, $codeOtp)
    {
    //return '';
    $montant = Procedure::where(['code' => $proc])->first('tarif')->tarif;
    //$paiementOM=  $this->payOrange($montant, $numberUser, $codeOtp);
    $paiementOM=  $this->_payOrange_();
    $paiement = null;
        
        $paiement = [
        'status'=>$paiementOM->getStatus(),
        'ref_paiement'=>$paiementOM->getTransactionId() ? $paiementOM->getTransactionId() : null,
        'date_paiement'=>now(),
        'message'=>$paiementOM->getMessage() ? $paiementOM->getMessage() : null,
        'infos'=>$paiementOM->getInfos() ? $paiementOM->getInfos() : null
        ];

        return $paiement;
     }
	 
	 public function payOrange($montant, $numberUser, $codeOtp): OMResponse
    {
        $omResponse = new OMResponse(false, "Paiement non valide", "", []);
        if ($numberUser== null || $codeOtp == null || $codeOtp == '' || $montant== null) {
            return $omResponse;
        }
        $numberUser = str_replace(' ', '', $numberUser);
        $codeOtp = str_replace(' ', '', $codeOtp);
        $username = config("app.username");//Nom d’utilisateur du partenaire pour l’API fourni par Orange
        $password = config("app.password"); //Mot de passe du partenaire pour l’API fourni par Orange
        $referencenumber = config("app.referencenumber"); // Information supplémentaire que le partenaire/Accepteur pourra configoyer.
        $exttxtid = config("app.exttxtid");//Reference de transaction du partenaire/Accepteur
        $numberReceiver = config("app.numberReceiver");//Numero marchant
        $url = config("app.url");

        $client = new \GuzzleHttp\Client(['verify' => false]); //Verify = false : désactiver la vérification du certificat 

        //Construction du paramètre xml à configoyer
        $xml = "<?xml version='1.0' encoding='UTF-8'?>
        <COMMAND>
            <TYPE>OMPREQ</TYPE>
            <customer_msisdn>{$numberUser}</customer_msisdn>
            <merchant_msisdn>{$numberReceiver}</merchant_msisdn>
            <api_username>{$username}</api_username>
            <api_password>{$password}</api_password>
            <amount>{$montant}</amount> 
            <PROVIDER>101</PROVIDER>
            <PROVIDER2>101</PROVIDER2>
            <PAYID>12</PAYID> 
            <PAYID2>12</PAYID2>
            <otp>{$codeOtp}</otp>
            <reference_number>{$referencenumber}</reference_number>
            <ext_txn_id>{$exttxtid}</ext_txn_id>
        </COMMAND>";

        $method = $client->post('https://testom.orange.bf:9008/payment', ['body' => $xml]);

        try {
            $statusCode = $method->getStatusCode();
            /**
             * Orange verifie les informations transmises dans le xml
             * Transaction validée : code statut = 200
             * Transaction invalidée : code statut est différent de 200 (voir liste des codes erreurs)
             */
            //Paiement non validé
            if ($statusCode != '200') {
                $omResponse = new OMResponse(false, "", "", []);
                return $omResponse;
            }
            //Paiement validé : on continue l'opération 
            $responseBody = $method->getBody();

            $responseXML  = "<?xml version='1.0' encoding='UTF-8'?>";
            $responseXML .= "    <response>";
            $responseXML .=         (string)$responseBody;
            $responseXML .= "    </response>";
            //Traitement du paiement validé
            return $this->paiementOK( $responseXML, $numberUser, $codeOtp, $montant, $responseBody);
        } catch (Exception $ex) {
            return $omResponse;
        } finally {
            // Release the connection. 
            $method->getBody()->close();
        }

        return $omResponse;
    }

    private function paiementOK( string $xmlString, string $numeroClient, string $otp, string $fraisdossier, string $responseBody)
    {
        $statusPaiement = false;
        $response_status = '';
        $trans_id = '';
        $response_text = '';
        $omResponse = null;
        try {
            //Traitement de la reponse
            $document = new \DOMDocument();
            $document->loadXML($xmlString);
            $noeudStatus = $document->getElementsByTagName('status');//Recuperation du Statut
            $noeudMessage = $document->getElementsByTagName('message');//Recuperation du message
            $noeudTransID = $document->getElementsByTagName('transID');//Recuperation de l'ID de la Transaction
            $erreurExpire = false;
            //Verifie que le noeud n'est pas vide
            if ($noeudStatus->length > 0) {
                $status = $noeudStatus->item(0);
                $response_status = $status->textContent;
                    //On s'assure que le paiement a été validé
                if ('200' == trim($response_status)) {
                    $statusPaiement = true;
                    if ($noeudTransID->length > 0) {
                        $noeudTransID = $noeudTransID->item(0);
                        $trans_id = $noeudTransID->textContent;
                    }
                    if ($noeudMessage->length > 0) {
                        $message = $noeudMessage->item(0);
                        $response_text = $message->textContent;
                    }
                    $omResponse = new OMResponse(true, $response_text, $trans_id, $responseBody);
                } else {
                        //Paiement non validé
                    if ('200' != trim($status->textContent)) {
                        $erreurExpire = true;
                        $omResponse = new OMResponse(false, "Paiement non valide", "", []);
                    }
                }
            } else {
                $omResponse = new OMResponse(false, "Paiement non valide", "", []);
            }
        } catch (Exception $e) {
            $omResponse = new OMResponse(false, "Paiement non valide", "", []);
        }
        return $omResponse;
    }    

    public static function _payOrange_(): OMResponse
    {
        return new OMResponse(true, "[9014_MERCODE]Cher client, votre paiement sur 20IMHOT23 de  100 FCFA a IMHOTEP IMMO a ete effectue avec succes. Votre solde:  488400 FCFA. ID Trans: OM240207.1348.C00092", "OM240207.1348.C00092", "<status>200</status><message>[9014_MERCODE]Cher client, votre paiement sur 20IMHOT23 de  100 FCFA a IMHOTEP IMMO a ete effectue avec succes. Votre solde:  488400 FCFA. ID Trans: OM240207.1348.C00092</message><transID>OM240207.1348.C00092</transID>");
    }
     
    }

    class OMResponse{
      private bool $status = false;
      private string $message;
      private string $transactionId;
      private $infos = [];
  
      function __construct($status, $message, $transactionId, $infos) {
          $this->status = $status;
          $this->message = $message;
          $this->transactionId = $transactionId;
          $this->infos = $infos;
        }
  
      function getStatus(): bool {return $this->status;}
      function getMessage(): string {return $this->message;}
      function getTransactionId(): string {return $this->transactionId;}
      function getInfos() {return $this->infos;}
  
      function setStatus($status) {
          $this->status = $status;
      }
  
      function setMessage($message) {
          $this->message = $message;
      }
  
      function setTransactionId($transactionId){
          $this->transactionId = $transactionId;
      }
      
      function setInfos($infos){
          $this->infos = $infos;
        }
      
    
  }
