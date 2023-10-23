<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeP0012 extends Demande
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];protected $primaryKey = 'uuid';

    protected $fillable=[
//         'uuid',
// 'libelle_court',
// 'libelle_long',
// 'etat',
// 'date_demande',
// 'identite',
// 'beneficiaire',
// 'beneficiaire_piece_jointe',
// 'montant',
// 'delai',
// 'code',
// 'email',
// 'is_producteur',
// 'is_distributeur',
// 'is_importateur',
// 'is_utilisateur',
// 'pays_fournisseur',
// 'id_produit',
// 'appelation_commercial',
// 'formule_chimique',
// 'destination_pays',
// 'utilisation_produit',
// 'aspect_produit',
// 'conditionnement_produit',
// 'poids',
// 'quantite',
// 'is_corrosif',
// 'is_iritant',
// 'is_toxic',
// 'is_inflammable',
// 'is_danger_env',
// 'type_local_stockage',
// 'capacite_stockage',
// 'is_regime_direct',
// 'is_sous_trait',
// 'is_agree',
// 'is_non_agree',
// 'user_id',
// 'procedure_id',
// 'type_demande_id',
// 'commune_id',
// 'confirmed',
// 'date_certif',
    ];
    function genererRandomString($longueur = 10) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $longueur; $i++) {
            $index = mt_rand(0, strlen($caracteres) - 1);
            $randomString .= $caracteres[$index];
        }

        return $randomString;
    }


}
