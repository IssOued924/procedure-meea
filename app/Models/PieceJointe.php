<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PieceJointe extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];protected $primaryKey = 'uuid';

    public function procedure(){
        return $this->belongsToMany(Procedure::class, 'procedure_piece_jointes', 'piece_jointe_id', 'procedure_id');
    }
}
