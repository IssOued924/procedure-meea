<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffectationP004 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    protected $primaryKey = 'uuid';
    protected $guarded = [];
}
