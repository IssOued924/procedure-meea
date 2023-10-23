<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP0011Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP0011Repository $repository){
        $this->repository = $repository;
    }
}
