<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CommentaireRepository;
class CommentaireP009Controller extends Controller
{
    public $repository;
    public function __construct(CommentaireP009Repository $repository){
        $this->repository = $repository;
    }
}
