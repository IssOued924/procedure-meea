<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Pays;
use App\Repositories\ProfileRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use function Laravel\Prompts\select;

class ProfileController extends Controller
{
    public $repository;
    public function __construct(ProfileRepository $repository){
        $this->repository = $repository;
    }


    public function index()
    {

        $data =  [
            "profiles" => $this->repository->all(),
            "pays" => Pays::all(),

        ];
        return view('backend.utilisateur.profile_list', $data);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // dd(Auth::user()->uuid);

     $user =  DB::table('usagers')->join('users', 'usagers.uuid', '=' ,'users.usager_id')->select('usagers.*' , 'users.name' , 'users.email')
     ->where('users.uuid', Auth::user()->uuid)
     ->first();

        return view('profile.edit', [
            'user' => $user,
            'pays' => Pays::all(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());



        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

      $userData = ['name' => $request->name, 'email' => $request->email];
      $usagerData = ['nom' => $request->nom,
                    'prenom' => $request->prenom,
                    'date_naissance' => $request->date_naissance,
                    'lieu_naisssance' => $request->lieu_naisssance,
                    'nom_pere' => $request->nom_pere,
                    'nom_mere' => $request->nom_pere,
                    'profession' => $request->profession,
                    'pays' => $request->pays,
                    'domicile' => $request->domicile,
                    'adresse_bf' => $request->adresse_bf,
                    'telephone' => $request->telephone,
                    'nom_entreprise' => $request->nom_entreprise,
                    'siege_social' => $request->siege_social,
                    'boite_postale' => $request->boite_postale,
                    'ifu' => $request->ifu,
                    'rccm' => $request->rccm,

                    ];




          DB::table('users')->where('uuid', Auth::user()->uuid)->update($userData);
          DB::table('usagers')->where('uuid', $request->uuid)->update($usagerData);

        // $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
