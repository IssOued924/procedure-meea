<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP003Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP003Repository $repository){
        $this->repository = $repository;
    }
}
