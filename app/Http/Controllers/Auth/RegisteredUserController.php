<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Usager;
use App\Models\TypeUsager;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // 'id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'String', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // dd($request);
        // creation de usager
        $usager = Usager::create([
            //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
            'nom' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
        ]);

        $user = User::create([
            //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // 'usager_id' => $usager->uuid,
        ]);


        // dd($user);

        event(new Registered($user));
        event(new Registered($usager));

            $user->usager_id = $usager->uuid;
           $user->save();

        Auth::login($user);

        // session()->flash('success', 'Registration successful!');

        return redirect(RouteServiceProvider::HOME)->with('success', 'Bienvenue au Formulaire de demandes d\'avis technique d\'importation de produits chimique !');;
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function storePersonneMorale(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         // 'id' => ['required'],
    //         'name' => ['required', 'string', 'max:255'],
    //         'ifu' => ['required', 'string', 'max:255'],
    //         'rccm' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'telephone' => ['required', 'String', 'max:255'],
    //         'siege_social' => ['required', 'string', 'max:255'],
    //         'boite_postale' => ['required', 'string', 'max:255'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);
    //     // dd($request);

    //     $user = User::create([
    //         //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
    //         'name' => $request->email,
    //         //'prenom' => $request->prenom,
    //         //'telephone' => $request->telephone,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     $usager = Usager::create([
    //         //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
    //         'nom_entreprise' => $request->name,
    //         'ifu' => $request->ifu,
    //         'rccm' => $request->rccm,
    //         'siege_social' => $request->siege_social,
    //         'boite_postale' => $request->boite_postale,
    //         'telephone' => $request->telephone,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     //$user->usager_id = $usager->uuid;

    //     // dd($user);

    //     event(new Registered($user));
    //     event(new Registered($usager));

    //     $user->usager_id = $usager->uuid;
    //     $usager->type_usager_id = TypeUsager::where('libelle_long', '=', 'Personne morale')->first()->uuid;
    //     $user->save();
    //     $usager->save();

    //     Auth::login($user);

    //     // session()->flash('success', 'Registration successful!');

    //     return redirect(RouteServiceProvider::HOME)->with('success', 'Bienvenue au Formulaire de demandes d\'avis technique d\'importation de produits chimique !');;
    // }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storePersonneMorale(Request $request): RedirectResponse
    {
        $request->validate([
            // 'id' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            'ifu' => ['required', 'string', 'max:255'],
            'rccm' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'telephone' => ['required', 'String', 'max:255'],
            'siege_social' => ['required', 'string', 'max:255'],
            'boite_postale' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        // dd($request);

        $user = User::create([
            //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
            'name' => $request->email,
            //'prenom' => $request->prenom,
            //'telephone' => $request->telephone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $usager = Usager::create([
            //'id' => Str::uuid(), // Génération d'un UUID pour l'utilisateur
            'nom_entreprise' => $request->name,
            'ifu' => $request->ifu,
            'rccm' => $request->rccm,
            'siege_social' => $request->siege_social,
            'boite_postale' => $request->boite_postale,
            'telephone' => $request->telephone,
            'password' => Hash::make($request->password),
        ]);

        $user->usager_id = $usager->uuid;

        // dd($user);

        event(new Registered($user));
        event(new Registered($usager));

        $user->usager_id = $usager->uuid;
        $usager->type_usager_id = TypeUsager::where('libelle_long', '=', 'Personne morale')->first()->uuid;
        $user->save();
        $usager->save();

        Auth::login($user);

        // session()->flash('success', 'Registration successful!');

        return redirect(RouteServiceProvider::HOME)->with('success', 'Bienvenue au Formulaire de demandes d\'avis technique d\'importation de produits chimique !');;
    }
}
