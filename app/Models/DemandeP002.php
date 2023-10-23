<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeP002  extends Demande
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $guarded = [];protected $primaryKey = 'uuid';
}
