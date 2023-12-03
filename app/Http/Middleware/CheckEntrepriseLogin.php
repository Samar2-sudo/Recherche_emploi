<?php

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckEntrepriseLogin
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('entreprise')->check()) {
            return $next($request);
        }

        return redirect('/login/entreprise');
    }
}
