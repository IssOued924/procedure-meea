<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;
    use \Wildside\Userstamps\Userstamps;

    protected $guarded = [];
}
