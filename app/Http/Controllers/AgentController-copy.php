<?php

namespace App\Http\Controllers;
use App\Repositories\AgentRepository;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public $repository;
    public function __construct(AgentRepository $repository){
        $this->repository = $repository;
    }

    public function index(){

        $data =  [
            "agents" => $this->repository->all(),

        ];
        return view('backend.utilisateur.agent_list', $data);
    }
}
