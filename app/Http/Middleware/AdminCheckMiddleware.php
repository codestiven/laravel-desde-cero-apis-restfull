<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
                 // Verificar si el usuario tiene permisos de administrador
        if (auth()->check() && auth()->user()->isAdmin()) {
            return $next($request);
        }

        return redirect('/home')->with('error', 'Acceso no autorizado.');


    }
}
