<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireP005Repository;
class CommentaireP005Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP005Repository $repository){
        $this->repository = $repository;
    }
}
