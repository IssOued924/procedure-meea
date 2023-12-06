<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class AffectationP002 extends Model
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;
    use Userstamps;
    protected $primaryKey = 'uuid';
    protected $guarded = [];
}
