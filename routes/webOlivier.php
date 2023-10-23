<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProfileController;
use App\Livewire\DemandeCompP002;
use App\Livewire\DemandeP007Comp;
use App\Livewire\DemandeComp;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeP001Controller;
use App\Http\Controllers\DemandeP002Controller;
use App\Http\Controllers\DemandeP007Controller;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BaseJuridiquesController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\DemandeP003Controller;
use App\Http\Controllers\DemandeP004Controller;
use App\Http\Controllers\DemandeP005Controller;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\UsagerController;
use App\Livewire\DemandeCompP0011;
use App\Livewire\DemandeCompP0012;
use App\Livewire\DemandeCompP003;
use App\Livewire\DemandeCompP009;
use App\Livewire\DemandeP0012;
use App\Livewire\DemandeP004;
use App\Livewire\DemandeP005Comp;
use App\Livewire\DemandeP008Comp;
use App\Models\DemandeP005;
use App\Models\Procedure;
use PharIo\Manifest\Author;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------;------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $procedure=Procedure::all();
    return view('welcome', [
        'procedure' => $procedure
    ]);
});


// routes des tests
Route::get('/test', [DemandeController::class, 'index']);
Route::post('/test-store', [DemandeController::class, 'store'])->name('test-route');

Route::get('/testpj', [DemandeController::class, 'testpj']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/P001', [DemandeP001Controller::class, 'create'])->name('demandesp001-create');
    Route::get("/demandes", DemandeComp::class)->name("demandes");
    Route::post('/demandesp001-store', [DemandeP001Controller::class, 'store'])->name('demandesp001-store');

    // Route des demandes d\'octroie d\'agrement technique Eau et Assainissement
    Route::get("/P002", DemandeCompP002::class)->name("demandes-p002");
    Route::post('/demandesp002-store', [DemandeP002Controller::class, 'store'])->name('demandesp002-store');


     // Certificat d'exemption des emballages et sachets plastiques non biodégradables

   Route::get("/P006", DemandeCompP003::class)->name("demandes-p003");
   Route::post('/demandesp003-store', [DemandeP003Controller::class, 'store'])->name('demandesp003-store');


    //   Demande poo4 certificat de detention d'un animal sauvage
    Route::get('/P004', DemandeP004::class)->name('demandesp004-create');
    Route::post('/demandesp004-store', [DemandeP004Controller::class, 'store'])->name('demandesp004-store');


    //   Demande poo5 permis de circulation de bois et de charbon de bois
    Route::get('/P005', DemandeP005Comp::class)->name('demandesp005-create');
    Route::post('/demandesp005-store', [DemandeP005Controller::class, 'store'])->name('demandesp005-store');

     //***************** DEMANDE P007 ********************************//
    Route::get("/P007", DemandeP007Comp::class)->name("demandes-p007");
    Route::post('/demandesp007-store', [DemandeP007Controller::class, 'store'])->name('demandesp007-store');

    	// P008 Demande d'utorisation de gestion de dechets
	Route::get("/P008", DemandeP008Comp::class)->name("demandep008");

              // Permis de coupe de bois et charbon de bois
    Route::get("/P0011", DemandeCompP0011::class)->name("demandesp0011");
              // Route::post("/demandesp0012-store", DemandeCompP0012::class)->name("demande-p0012");

            // eco tourisme
    Route::get("/P0012", DemandeCompP0012::class)->name("demandesp0012");
   // Route::post("/demandesp0012-store", DemandeCompP0012::class)->name("demande-p0012");



    // Permis de chasse

    Route::get("/P003", DemandeCompP009::class)->name("demandesp009");
    Route::post("/demandesp0012-store", DemandeCompP0012::class)->name("demande-p0012");




});

// Route partie administration
Route::get('/administration', [BackendController::class, 'index'])->name('administration');
Route::get('/administration/demandes-list', [BackendController::class, 'listDemande'])->name('demandes-list');

    // Route parametre
Route::get('/administration/parametre/commune', [CommuneController::class, 'index'])->name('commune-list');
Route::get('/administration/parametre/province', [ProvinceController::class, 'index'])->name('province-list');
Route::get('/administration/parametre/region', [RegionController::class, 'index'])->name('region-list');
Route::get('/administration/parametre/basejuridique', [BaseJuridiquesController::class, 'index'])->name('basejuridique-list');
// Route::get('/administration/parametre/tarif', [TarifC::class, 'index'])->name('tarif-list');
Route::get('/administration/parametre/structure', [StructureController::class, 'index'])->name('structure-list');
Route::get('/administration/parametre/procedure', [ProcedureController::class, 'index'])->name('procedure-list');
Route::get('/administration/parametre/categorie', [CategorieController::class, 'index'])->name('categorie-list');
Route::get('/administration/parametre/service', [ServiceController::class, 'index'])->name('service-list');

// Route Utilisateur

Route::get('/administration/utilisateur/agent', [AgentController::class, 'index'])->name('agent-list');
Route::get('/administration/utilisateur/usager', [UsagerController::class, 'index'])->name('usager-list');
Route::get('/administration/utilisateur/profile', [ProfileController::class, 'index'])->name('profile-list');

require __DIR__.'/auth.php';
