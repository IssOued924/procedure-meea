<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireP002Repository;
class CommentaireP002Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP002Repository $repository){
        $this->repository = $repository;
    }
}
