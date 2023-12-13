<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireP003Repository;
class CommentaireP003Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP003Repository $repository){
        $this->repository = $repository;
    }
}
