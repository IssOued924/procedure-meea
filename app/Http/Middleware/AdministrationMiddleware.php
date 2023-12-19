<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class AdministrationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
           
        if(is_null(Auth::user()->agent_id))
        {
           // return redirect('/administration');
            // Redirection vers une page d'erreur ou une page d'accueil par exemple
            throw new NotFoundHttpException();//->with('error', 'Accès refusé. Vous n\'avez pas les autorisations nécessaires.');
        }else

        // L'utilisateur est autorisé à accéder à l'espace d'administration
        return $next($request);
    }else {
      
        throw new NotFoundHttpException();
    }

        //return $next($request);
    }
}
