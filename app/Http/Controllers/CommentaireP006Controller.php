<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireP006Repository;
class CommentaireController extends Controller
{
    public $repository;
    public function __construct(CommentaireP006Repository $repository){
        $this->repository = $repository;
    }
}
