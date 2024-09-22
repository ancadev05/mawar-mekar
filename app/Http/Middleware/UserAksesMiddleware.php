<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $level_akun_id): Response
    {
        // mengecek terlebih dahulu jenis akun yang login
        if (Auth::guard('web')->check()) {
            if (Auth::guard('web')->user()->level_akun_id == $level_akun_id) {
                return $next($request);
            } else {
                return redirect('/mawar-mekar');
            }
        } else {
            return redirect('/mawar-mekar');
        }
    }
}
