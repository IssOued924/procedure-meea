<?php

use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\BaseJuridiquesController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommuneController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\DemandeP0011Controller;
use App\Http\Controllers\DemandeP0012Controller;
use App\Http\Controllers\DemandeP001Controller;
use App\Http\Controllers\DemandeP002Controller;
use App\Http\Controllers\DemandeP003Controller;
use App\Http\Controllers\DemandeP004Controller;
use App\Http\Controllers\DemandeP005Controller;
use App\Http\Controllers\DemandeP006Controller;
use App\Http\Controllers\DemandeP007Controller;
use App\Http\Controllers\DemandeP008Controller;
use App\Http\Controllers\DemandeP009Controller;
use App\Http\Controllers\PieceJointeController;
use App\Http\Controllers\PlainteController;
use App\Http\Controllers\ProcedureController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\TypeUsagerController;
use App\Http\Controllers\UsagerController;
use App\Livewire\DemandeComp;
use App\Livewire\DemandeCompP0011;
use App\Livewire\DemandeCompP0012;
use App\Livewire\DemandeCompP002;
use App\Livewire\DemandeCompP003;
use App\Livewire\DemandeCompP004;
use App\Livewire\DemandeCompP006;
use App\Livewire\DemandeCompP009;
use App\Livewire\DemandeP0012;
use App\Livewire\DemandeP004;
use App\Livewire\DemandeP005Comp;
use App\Livewire\DemandeP007Comp;
use App\Livewire\DemandeP008Comp;
use App\Models\DemandeP005;
use App\Models\Procedure;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Author;
use App\Livewire\DemandeFontController;

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
Route::middleware(['mustreset'])->group(function () {
    Route::get('/', function () {
        $procedure=Procedure::all();
        return view('welcome', [
            'procedure' => $procedure
        ]);
    });

    // routes des tests
   /* Route::get('/test', [DemandeController::class, 'index']);
    Route::post('/test-store', [DemandeController::class, 'store'])->name('test-route');

    Route::get('/testpj', [DemandeController::class, 'testpj']);
*/
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/contact', [ContactUsFormController::class, 'createForm']);
    Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

});

Route::middleware(['auth', 'mustreset'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/P001', [DemandeP001Controller::class, 'create'])->name('demandesp001-create');
    Route::get("/P001", DemandeComp::class)->name("demandes");
    Route::post('/demandesp001-store', [DemandeP001Controller::class, 'store'])->name('demandesp001-store');
    Route::post('/demandesp001-update', [DemandeP001Controller::class, 'update'])->name('demandesp001-update');


    // Route des demandes d\'octroie d\'agrement technique Eau et Assainissement
    Route::get("/P002", DemandeCompP002::class)->name("demandes-p002");
    Route::post('/demandesp002-store', [DemandeP002Controller::class, 'store'])->name('demandesp002-store');
    Route::post('/demandesp002-update', [DemandeP002Controller::class, 'update'])->name('demandesp002-update');


     // Certificat d'exemption des emballages et sachets plastiques non biodégradables

   Route::get("/P006", DemandeCompP006::class)->name("demandes-p006");
   Route::post('/demandesp006-store', [DemandeP006Controller::class, 'store'])->name('demandesp006-store');
   Route::post('/demandesp006-update', [DemandeP006Controller::class, 'update'])->name('demandesp006-update');


    //   Demande poo4 certificat de detention d'un animal sauvage
    Route::get('/P004', DemandeCompP004::class)->name('demandesp004-create');
    Route::post('/demandesp004-store', [DemandeP004Controller::class, 'store'])->name('demandesp004-store');
    Route::post('/demandesp004-update', [DemandeP004Controller::class, 'update'])->name('demandesp004-update');


    //   Demande poo5 permis de circulation de bois et de charbon de bois
    Route::get('/P005', DemandeP005Comp::class)->name('demandesp005-create');
    Route::post('/demandesp005-store', [DemandeP005Controller::class, 'store'])->name('demandesp005-store');
    Route::post('/demandesp005-update', [DemandeP005Controller::class, 'update'])->name('demandesp005-update');

     //***************** DEMANDE P007 Homologations ********************************//
    Route::get("/P007", DemandeP007Comp::class)->name("demandes-p007");
    Route::post('/demandesp007-store', [DemandeP007Controller::class, 'store'])->name('demandesp007-store');
    Route::post('/demandesp007-update', [DemandeP007Controller::class, 'update'])->name('demandesp007-update');


    	// P008 Demande d'autorisation de gestion de dechets
	Route::get("/P008", DemandeP008Comp::class)->name("demandep008");
    Route::post("/demandesp008-store", [DemandeP008Controller::class, 'store'])->name("demandesp008-store");
    Route::post("/demandesp008-update", [DemandeP008Controller::class, 'update'])->name("demandesp008-update");


              // Permis de coupe de bois et charbon de bois
    Route::get("/P0011", DemandeCompP0011::class)->name("demandesp0011");
    Route::post("/demandesp0011-store", [DemandeP0011Controller::class, 'store'])->name("demandesp0011-store");
    Route::post("/demandesp0011-update", [DemandeP0011Controller::class, 'update'])->name("demandesp0011-update");

            // eco tourisme
    Route::get("/P0012", DemandeCompP0012::class)->name("demandesp0012");
    Route::post("/demandesp0012-store", [DemandeP0012Controller::class, 'store'])->name("demandesp0012-store");
    Route::post("/demandesp0012-update", [DemandeP0012Controller::class, 'update'])->name("demandesp0012-update");
    Route::post("/demandesp0012-payment", [DemandeP0012Controller::class, 'payment'])->name("demandesp0012-payment");



    // Permis de chasse
    Route::get("/P003", DemandeCompP003::class)->name("demandesp003");
    Route::post("/demandesp003-store", [DemandeP003Controller::class, 'store'])->name("demandesp003-store");
    Route::post("/demandesp003-update", [DemandeP003Controller::class, 'update'])->name("demandesp003-update");







    //administration

// Route partie administration
Route::middleware('admin')->group(function () {
Route::get('/administration', [BackendController::class, 'index'])->name('administration');
Route::get('/administration/demandes-list', [BackendController::class, 'listDemande'])->name('demandes-list');
Route::get('/administration/demandesp0012-list', [BackendController::class, 'listDemandep0012'])->name('demandesp0012-list');
Route::get('/administration/demandesp008-list', [BackendController::class, 'listDemandep008'])->name('demandesp008-list');
Route::get('/administration/demandesp003-list', [BackendController::class, 'listDemandep003'])->name('demandesp003-list');
Route::get('/administration/demandesp004-list', [BackendController::class, 'listDemandep004'])->name('demandesp004-list');
Route::get('/administration/demandesp005-list', [BackendController::class, 'listDemandep005'])->name('demandesp005-list');
Route::get('/administration/demandesp0011-list', [BackendController::class, 'listDemandep0011'])->name('demandesp0011-list');
Route::get('/administration/demandesp006-list', [BackendController::class, 'listDemandep006'])->name('demandesp006-list');
Route::get('/administration/demandesp007-list', [BackendController::class, 'listDemandep007'])->name('demandesp007-list');
Route::post('/administration/statusChange/{id}/{currentStatus}/{table}', [BackendController::class, 'statutChange'])->name('statusChange');
Route::get('/administration/user-profile/', [BackendController::class, 'show'])->name('users-profile');
Route::post('/administration/user-profile/', [BackendController::class, 'update'])->name('update-profile');

Route::post('/administration/assignation/{model}/{idDemande}/{nameDemandeId}/{tableName}', [BackendController::class, 'assignation'])->name('assignation');

Route::post('/administration/uploadActe/{id}/{currentStatus}/{table}', [BackendController::class, 'uploadActe'])->name('uploadActe');
Route::get('/administration/rejet/{id}/{table}', [BackendController::class, 'rejetter'])->name('rejetter');
Route::get('/administration/procedure-dashboard/{procedure}/{procedureName}', [BackendController::class, 'procedureDashboard'])->name('procedure-dashboard');
Route::get('/administration/demandesp002-list', [BackendController::class, 'listDemandep002'])->name('demandesp002-list');

    // Route parametre
Route::get('/administration/parametre/commune', [CommuneController::class, 'index'])->name('commune-list');
Route::get('/administration/parametre/commune/{uuid}', [CommuneController::class, 'supprimer'])->name('supprimer-commune');
Route::get('/administration/parametre/commune', [CommuneController::class, 'index'])->name('commune-list');
Route::post('/administration/parametre/commune', [CommuneController::class, 'store'])->name('commune-store');
Route::get('/administration/parametre/province', [ProvinceController::class, 'index'])->name('province-list');
Route::get('/administration/parametre/province', [ProvinceController::class, 'index'])->name('province-list');
Route::get('/administration/parametre/province/{uuid}', [ProvinceController::class, 'supprimer'])->name('supprimer-province');
Route::post('/administration/parametre/province', [ProvinceController::class, 'store'])->name('province-store');




Route::get('/administration/parametre/region', [RegionController::class, 'index'])->name('region-list');
Route::get('/administration/parametre/region/{uuid}', [RegionController::class, 'supprimer'])->name('supprimer');
Route::post('/administration/parametre/region', [RegionController::class, 'store'])->name('region-store');

Route::get('/administration/parametre/basejuridique', [BaseJuridiquesController::class, 'index'])->name('basejuridique-list');
Route::get('/administration/parametre/basejuridique/{uuid}', [BaseJuridiquesController::class, 'supprimer'])->name('suprimer-basejuridique');
Route::post('/administration/parametre/basejuridique', [BaseJuridiquesController::class, 'store'])->name('basejuridique-store');
Route::put('/administration/parametre/basejuridique/{uuid}', [BaseJuridiquesController::class, 'update'])->name('basejuridique-update');
// Route::get('/administration/parametre/tarif', [TarifC::class, 'index'])->name('tarif-list');
Route::get('/administration/parametre/structure', [StructureController::class, 'index'])->name('structure-list');
Route::get('/administration/parametre/structure/{uuid}', [StructureController::class, 'suprimer'])->name('suprimer-structure');
Route::put('/administration/parametre/structure/{uuid}', [StructureController::class, 'update'])->name('structure-update');
Route::post('/administration/parametre/structure', [StructureController::class, 'store'])->name('structure-store');
Route::get('/administration/parametre/procedure', [ProcedureController::class, 'index'])->name('procedure-list');
Route::put('/administration/parametre/procedure/{uuid}', [ProcedureController::class, 'update'])->name('procedure-update');
Route::put('/administration/parametre/procedure/session/{uuid}', [ProcedureController::class, 'sessionUpdate'])->name('procedure-session-update');
Route::get('/administration/parametre/categorie', [CategorieController::class, 'index'])->name('categorie-list');
Route::get('/administration/parametre/service', [ServiceController::class, 'index'])->name('service-list');
Route::get('/administration/parametre/service/{uuid}', [ServiceController::class, 'supprimer'])->name('suprimer-service');
Route::post('/administration/parametre/service/', [ServiceController::class, 'store'])->name('service-store');
Route::get('/administration/parametre/piecejointe/', [PieceJointeController::class, 'index'])->name('piecejointe-list');
Route::get('/administration/parametre/piecejointe/{uuid}', [PieceJointeController::class, 'supprimer'])->name('suprimer-piecejointe');
Route::post('/administration/parametre/piecejointe/', [PieceJointeController::class, 'store'])->name('piecejointe-store');
Route::put('/administration/parametre/piecejointe/{uuid}', [PieceJointeController::class, 'update'])->name('piecejointe-update');
Route::get('/administration/parametre/typeusager/', [TypeUsagerController::class, 'index'])->name('typeUsager-list');
Route::get('/administration/parametre/typeusager/{uuid}', [TypeUsagerController::class, 'suprimer'])->name('suprimer-typeusager');
Route::post('/administration/parametre/typeusager/', [TypeUsagerController::class, 'store'])->name('typeUsager-store');
Route::put('/administration/parametre/typeusager/{uuid}', [TypeUsagerController::class, 'update'])->name('typeUsager-update');
Route::get('/administration/parametre/role', [RoleController::class, 'index'])->name('role-list');
Route::get('/administration/parametre/role/{uuid}', [RoleController::class, 'supprimer'])->name('suprimer-role');
Route::post('/administration/parametre/role', [RoleController::class, 'store'])->name('role-store');

// Route Utilisateur
Route::get('/administration/utilisateur/user', [RegisteredUserController::class, 'listUsers'])->name('user-list');
Route::get('/administration/utilisateur/agent', [AgentController::class, 'index'])->name('agent-list');
Route::post('/administration/utilisateur/agent/', [AgentController::class, 'store'])->name('agent-store');
Route::put('/7dministration/utilisateur/agent/{uuid}', [AgentController::class, 'update'])->name('agent-update');
Route::get('/administration/utilisateur/usager', [UsagerController::class, 'index'])->name('usager-list');

Route::get('/administration/utilisateur/profile', [ProfileController::class, 'index'])->name('profile-list');
Route::get('/administration/utilisateur/user-update/{uuid}', [RegisteredUserController::class, 'update'])->name('user-update');
Route::post('/administration/utilisateur/user-store', [RegisteredUserController::class, 'userStore'])->name('user-store');
Route::post('/administration/utilisateur//resetPassword{id}', [RegisteredUserController::class, 'resetPassword'])->name('reinitialiser');
Route::get('/administration/statistique/nombreDemandeEncours', [BackendController::class, 'nombreDemandeByProcedure'])->name('nbdemande-by-procedure');
});
// Liste des demandes d'un agent
Route::get('/get-communes/{province_id}', [ProvinceController::class,  'getCommunesByProvince']);
Route::get('/demandes-lists', [BackendController::class, 'listsDemande'])->name('demandes-lists');



// plainte
Route::get('/plainte', [PlainteController::class, 'plainteForm'])->name('plainte.form');
Route::post('/plainte', [PlainteController::class, 'plainteStore'])->name('plainte.store');
Route::get('/listePlainte/{procedure}', [PlainteController::class, 'listePlainte'])->name('listePlainte');
Route::post('/editPlainte/{id}', [PlainteController::class, 'editPlainte'])->name('editPlainte');


});




Route::get("/procedure/modification/{id}/{procedure}", DemandeFontController::class, 'editerDemande')->name("editer-demande");
Route::get('/get-sous-domaine-by-categorie', [DemandeP002Controller::class, 'getSousDomaineByCategorie'])->name('get-sous-domaine-by-categorie');
Route::get('/get-delete-autre-document', [DemandeP002Controller::class, 'deleteAutreDocument'])->name('get-delete-autre-document');

require __DIR__.'/auth.php';
