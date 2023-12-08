<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\UpdatePWDRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\View\View;
use App\Models\Procedure;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create($code=null): View
    {
        $procedure=Procedure::where("code", $code)->first();
        // dd($procedure);
        return view('auth.login', [
            'procedure' => $procedure
        ]);
    }


    /**
     * Display the createPWD view.
     */
    public function createPWD(): View
    {
        return view('auth.update-password');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
         $request->authenticate();

         $request->session()->regenerate();


        //  return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'Bienvenue sur le formulaire de la demande ');

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(!is_null(Auth::user()->agent_id))
            {
                return redirect('/administration');
            }else{
                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'Bienvenue ');
        //  return  redirect('/');
             }
        }
        return back()->withErrors([
            'email' => 'email incorrects',
            'password' => 'Mot de passe incorrects',
        ])->onlyInput('email');

    }

    public function updatePassword(UpdatePWDRequest $request): RedirectResponse
    {
        // dd($request->all());

        Auth::user()->update([
            'must_reset_password' => 0,
            'password' => Hash::make($request->password)
        ]);
        
        return redirect('/administration')->with('success', 'Mot de passe modifie avec succes ');
        // return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'Mot de passe modifie avec succes ');
        
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
