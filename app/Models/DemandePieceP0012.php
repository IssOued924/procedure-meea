<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandePieceP0012 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];
    protected $primaryKey = 'uuid';

    public function Demande(){
        return $this->belongsTo(DemandeP0012::class, 'demande_p0012_id', 'uuid');

    }

    public function pieceJointe(){
        return $this->belongsTo(PieceJointe::class, 'piece_jointe_id', 'uuid');
    }

}
