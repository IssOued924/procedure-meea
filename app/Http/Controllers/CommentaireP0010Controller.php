<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP0010Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP0010Repository $repository){
        $this->repository = $repository;
    }
}
