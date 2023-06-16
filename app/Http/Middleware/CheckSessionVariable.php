<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $variableName)
    {if (!$request->session()->has('username')) {
        // Redirect the user to the login page or show an error message
        return redirect()->route('login')->withErrors(['You must be logged in to access this page.']);
    }

    return $next($request);
    }
}
