<?php

namespace App\Http\Controllers;
use App\Models\Role;

use App\Models\TypeUsager;

use App\Repositories\RoleRepository;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RoleController extends Controller
{
    public $repository;
    public function __construct(RoleRepository $repository){
        $this->repository = $repository;
    }

    public function index(){


        $data =  [
            "roles" => $this->repository->all(),

        ];
        return view('backend.parametre.role_list', $data);


    }


    public function store(Request $request, Role $role){
        $data = $request->all();

        $role = $this->repository->create($data);
        $role->save();

        Alert::success('Succès', 'Role   a été créee avec succès !');
        return redirect()->route('role-list')->with('success', 'Role à été Enregistrée avec succès !');

    }

    // mise a jour de la base juridique

    public function update(Request $request, $uuid)
{
    $request->validate([
        'libelle_court' => 'required',
        'libelle_long' => 'required',
    ]);

    $type = TypeUsager::find($uuid);
    $type->update([
        'libelle_court' => $request->input('libelle_court'),
        'libelle_long' => $request->input('libelle_long'),
    ]);

    return redirect()->route('role-list')->with('success', 'Role  mis à jour avec succès !');
}



            // Supression
 public function supprimer($uuid)
{
    // Récupérez l'enregistrement à supprimer
    $type = Role::find($uuid);

    // Vérifiez si l'enregistrement existe
    if (!$type) {
        return redirect()->route('role-list')->with('erreur', 'Type  Usager non trouvé');
    }

    // Supprimez l'enregistrement
    $type->delete();

    return redirect()->route('role-list')->with('success', 'Role supprimée avec succès !');
}


}
