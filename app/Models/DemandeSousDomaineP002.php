<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeSousDomaineP002 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use \Wildside\Userstamps\Userstamps;
    protected $guarded = [];
    protected $primaryKey = 'uuid';
}
