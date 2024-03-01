<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use \Wildside\Userstamps\Userstamps;
    protected $primaryKey = 'uuid';
    public $fillable = ['libelle', 'region_id'];

    public function region(){
        return $this->belongsTo(Region::class, 'region_id', 'uuid');
    }

    public function communes()
    {
        return $this->hasMany(Commune::class, 'province_id', 'uuid');
    }

    public function demande()
    {
        return $this->hasMany(DemandeP001::class, 'demande_p001_id');
    }
}
