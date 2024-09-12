<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class GeneralMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah pengguna adalah admin atau siswa
        if (Auth::guard('web')->check() || Auth::guard('pesilat')->check()) {
            return $next($request);
        }

        // Jika tidak ada yang login, redirect ke halaman login
        return redirect('/login');
        // return $next($request);
    }
}
