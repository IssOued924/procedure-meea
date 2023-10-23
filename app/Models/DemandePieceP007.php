<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandePieceP007 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];protected $primaryKey = 'uuid';

    public function Demande(){
        return $this->belongsTo(DemandeP007::class, 'demande_p007_id', 'uuid');
        
    }

    public function pieceJointe(){
        return $this->belongsTo(PieceJointe::class, 'piece_jointe_id', 'uuid');
    }
    
}
