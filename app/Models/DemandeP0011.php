<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DemandeP0011 extends DemandeP005
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];protected $primaryKey = 'uuid';

    function genererRandomString($longueur = 10) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $longueur; $i++) {
            $index = mt_rand(0, strlen($caracteres) - 1);
            $randomString .= $caracteres[$index];
        }

        return $randomString;
    }
}
