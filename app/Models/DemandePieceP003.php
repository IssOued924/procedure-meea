<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandePieceP003 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];protected $primaryKey = 'uuid';

    public function Demande(){
        return $this->belongsTo(DemandeP003::class, 'demande_p003_id', 'uuid');
        
    }

    public function pieceJointe(){
        return $this->belongsTo(PieceJointe::class, 'piece_jointe_id', 'uuid');
    }
    
}
