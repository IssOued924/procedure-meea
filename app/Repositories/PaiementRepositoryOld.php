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
     $paiementOM=\Pooldevmtdpce\Payment\Payment::payOrange($montant, $numberUser, $codeOtp);
     $paiement = null;
        $paiement = Paiement::create([
        'ref_paiement'=>$paiementOM->getTransactionId(),
        'date_paiement'=>now(),
        'code_procedure'=>$code_procedure,
        'demande_id'=>$demande_id,
        'message'=>$paiementOM->getMessage(),
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

    ////////////////////////////////////////////////////////////////////////////////////////////////////

    public static function payOrange($montant, $numberUser, $codeOtp): OMResponse
    {
        $omResponse = new OMResponse(false, "Paiement non valide", "", []);
        if ($numberUser== null || $codeOtp == null || $codeOtp == '' || $montant== null) {
            return $omResponse;
        }
        $numberUser = str_replace(' ', '', $numberUser);
        $codeOtp = str_replace(' ', '', $codeOtp);
        $username =env("OM_USERNAME");//Nom d’utilisateur du partenaire pour l’API fourni par Orange
        $password =env("OM_PASSWORD"); //Mot de passe du partenaire pour l’API fourni par Orange
        $referencenumber =env("OM_REFERNCE_NUMBER"); // Information supplémentaire que le partenaire/Accepteur pourra envoyer.
        $exttxtid =env("OM_REFERENCE_TRANSACTION");//Reference de transaction du partenaire/Accepteur
        $numberReceiver =env("OM_NUMBER_RECEIVER");//Numero marchant
        $url = env("OM_URL");

        //$client = new \GuzzleHttp\Client(); //Verify = false : désactiver la vérification du certificat 

        //Construction du paramètre xml à envoyer
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

        //$method = $client->post($url, ['body' => $xml]);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,// your preferred link
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $xml,
            CURLOPT_HTTPHEADER => array(
                // Set Here Your Requesred Headers
                'Content-Type: application/xml',
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            $omResponse = new OMResponse(false, "cURL Error #:" . $err, "", []);
                return $omResponse;
        } else {
            $resp_data = self::parse("<response>$response</response>");
        }
        
        //dd($response, $resp_data, $resp_data->status);

        try {
            $statusCode = $resp_data->status;
            /**
             * Orange verifie les informations transmises dans le xml
             * Transaction validée : code statut = 200
             * Transaction invalidée : code statut est différent de 200 (voir liste des codes erreurs)
             */
            //Paiement non validé
            if ($statusCode != '200') {
                $omResponse = new OMResponse(false, "Paiement non validé", "", $response);
                return $omResponse;
            }else{
                $omResponse = new OMResponse(false, "Paiement validé", "", $response);
                //return $omResponse;
            }
            //Paiement validé : on continue l'opération 
            //Traitement du paiement validé
            return (new PaiementRepository())->paiementOK($response, $numberUser, $codeOtp, $montant);
        } catch (Exception $ex) {
            return $omResponse;
        }

        return $omResponse;
    }

    private function paiementOK( $xmlString, string $numeroClient, string $otp, string $fraisdossier)
    {
        $statusPaiement = false;
        $response_status = '';
        $trans_id = '';
        $response_text = '';
        $omResponse = null;
        try {
            //Traitement de la reponse
            $resp_data = self::parse("<response>$xmlString</response>");
            $noeudStatus = $resp_data->status;//$document->getElementsByTagName('status');//Recuperation du Statut
            $noeudMessage = $resp_data->message;//$document->getElementsByTagName('message');//Recuperation du message
            $noeudTransID = $resp_data->transID;//$document->getElementsByTagName('transID');//Recuperation de l'ID de la Transaction
            $erreurExpire = false;
            //Verifie que le noeud n'est pas vide
            if ($noeudStatus) {
                    //On s'assure que le paiement a été validé
                if ('200' == trim($noeudStatus)) {
                    $statusPaiement = true;
                    if ($noeudTransID) {
                        $trans_id = $noeudTransID;
                    }
                    if ($noeudMessage) {
                        $response_text = $noeudMessage;
                    }
                    $omResponse = new OMResponse(true, $response_text, $trans_id, $xmlString);
                } else {
                        //Paiement non validé
                    if ('200' != trim($noeudStatus)) {
                        $erreurExpire = true;
                        $omResponse = new OMResponse(false, "Paiement non valide1", "", []);
                    }
                }
            } else {
                $omResponse = new OMResponse(false, "Paiement non valide2", "", []);
            }
        } catch (Exception $e) {
            $omResponse = new OMResponse(false, "Paiement non valide3", "", $e);
        }
        return $omResponse;
    }
    
    public static function parse(string $xmlContent)
    {
        return json_decode(json_encode(simplexml_load_string($xmlContent)));
    }

    public static function _payOrange_(): OMResponse
    {
        return new OMResponse(true, "[9014_MERCODE]Cher client, votre paiement sur 20IMHOT23 de  100 FCFA a IMHOTEP IMMO a ete effectue avec succes. Votre solde:  488400 FCFA. ID Trans: OM240207.1348.C00092", "OM240207.1348.C00092", "<status>200</status><message>[9014_MERCODE]Cher client, votre paiement sur 20IMHOT23 de  100 FCFA a IMHOTEP IMMO a ete effectue avec succes. Votre solde:  488400 FCFA. ID Trans: OM240207.1348.C00092</message><transID>OM240207.1348.C00092</transID>");
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
     
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


