<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        $uri = $request->getRequestUri();
        $uri1 = substr($uri, 1);
        // dd('/login'.$request->getRequestUri());
        return $request->expectsJson() ? null : route('login',['code' => $uri1]);
        //return $request->expectsJson() ? null : redirect('/login'.$request->getRequestUri());
    }
}
