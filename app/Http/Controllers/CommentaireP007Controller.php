<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP007Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP007Repository $repository){
        $this->repository = $repository;
    }
}
