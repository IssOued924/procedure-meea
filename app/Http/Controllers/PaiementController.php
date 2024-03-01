<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Repositories\PaiementRepository;

use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PaiementController extends Controller
{
    // public $payRepository;
    // public function __construct(PaiementRepository $payRepository)
    // {
    //     $this->payRepository = $payRepository;
    // }

    // public $repository;
    // public function __construct(PaiementRepository $repository){
    //     $this->repository = $repository;
    // }


    public function payOM(Request $request)
    {

        $payRepository = new PaiementRepository();

        // $paiementOrange = $payRepository->paiementOrange_('1500', $_POST['numero'], $_POST['otp']);
        $paiementOrange = $payRepository->paiementOrange_($_POST['proc'], $_POST['numero'], $_POST['otp']);

        return json_encode(array('status' => 'success', 'data' => $paiementOrange));

    }

   
}
