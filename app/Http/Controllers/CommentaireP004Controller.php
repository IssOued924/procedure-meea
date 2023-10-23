<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP004Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP004Repository $repository){
        $this->repository = $repository;
    }
}
