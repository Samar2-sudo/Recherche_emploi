<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEntrepriseRegistration
{

    public function handle($request, Closure $next)
    {
        // Check if entreprise registration is allowed
        if (config('app.allow_entreprise_registration')) {
            return $next($request);
        }

        // Redirect or abort based on your requirement
        return redirect()->route('home')->with('error', 'Entreprise registration is not allowed.');
    }
}
