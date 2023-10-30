<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';

    public function baseJuridique(){
        return $this->belongsToMany(BaseJuridiques::class, 'procedure_base_juridiques', 'procedure_id', 'base_juridique_id');
    }

    public function pieceJointe(){
        return $this->belongsToMany(PieceJointe::class, 'procedure_piece_jointes','procedure_id', 'piece_jointe_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }


}
