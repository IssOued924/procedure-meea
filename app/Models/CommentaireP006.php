<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentaireP006 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';

    public function Demande(){
        return $this->belongsTo(DemandeP006::class, 'demande_p006_id', 'uuid');
    }

    
}
