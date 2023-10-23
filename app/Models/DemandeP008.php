<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeP008 extends Demande
{
    use HasFactory;
    use \App\Http\Traits\UsesUuid;

    protected $guarded = [];
    protected $primaryKey = 'uuid';

    protected $fillable=[];

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
