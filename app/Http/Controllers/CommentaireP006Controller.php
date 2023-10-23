<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireController extends Controller
{
    public $repository;
    public function __construct(CommentaireP006Repository $repository){
        $this->repository = $repository;
    }
}
