<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;
    use \Wildside\Userstamps\Userstamps;

    protected $guarded = [];
    

    public function user()
    {
        return $this->hasOne(User::class,'uuid','user_id');
    }


    public function usager(){
        return $this->belongsTo(Usager::class, 'uuid', 'usager_id');
    }
}
