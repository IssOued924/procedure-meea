<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP001Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP001Repository $repository){
        $this->repository = $repository;
    }
}
