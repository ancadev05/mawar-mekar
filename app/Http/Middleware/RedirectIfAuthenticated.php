<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // return redirect(RouteServiceProvider::HOME);

                // pengecekan status login
                // jika sudah login lalu ingin akses ke halaman login
                // maka akan diarahkan kembali ke dashboardnya masing-masing
                if (Auth::guard('web')->check()) {
                    // mengarahkan kehalaman dashboard sesuai level username atau jenis akun
                    // admin pimda
                    if (Auth::guard('web')->user()->level_akun_id == 2) {
                        return redirect('/mawar-mekar/pimda');
                    } elseif (Auth::guard('web')->user()->level_akun_id == 3) { // jika level cabang
                        return redirect('/mawar-mekar/cabang');
                    }
                }

                if (Auth::guard('pesilat')->check()) {
                    // mengarahkan kehalaman dashboar pesilat sesuai level username atau jenis akun
                    return redirect('/mawar-mekar/pesilat');
                }
                // return redirect('/');
            }
        }

        return $next($request);
    }
}
