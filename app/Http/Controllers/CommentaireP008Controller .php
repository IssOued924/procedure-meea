<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP008Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP008Repository $repository){
        $this->repository = $repository;
    }
}
