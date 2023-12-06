<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeP008 extends Demande
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use \Wildside\Userstamps\Userstamps;

    protected $guarded = [];
    protected $primaryKey = 'uuid';

    protected $fillable=[];

    function genererRandomString($longueur = 10) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $longueur; $i++) {
            $index = mt_rand(0, strlen($caracteres) - 1);
            $randomString .= $caracteres[$index];
        }

        return $randomString;
    }

    public function usager(){
        return $this->belongsTo(Usager::class, 'usager_id', 'uuid');
    }

      //   Function recuperation des status demandes
      public function statut()
      {
          return $this->belongsTo(StatutDemande::class, 'etat');
      }

        //recuperation de localite de demandeur
    public function localite()
    {
        return $this->belongsTo(Commune::class, 'commune_id');
    }
    public function demandePiece()
    {
        return $this->hasMany(DemandePieceP008::class, 'demande_p008_id');
    }

    public function demandeCommentaire()
    {
        return $this->hasMany(CommentaireP008::class, 'demande_p008_id');
    }

}
