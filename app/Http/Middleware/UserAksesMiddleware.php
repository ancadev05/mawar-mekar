<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
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
        // pengaturan hak akses berdasar level akun
        // mengecek terlebih dahulu jenis akun yang login
        if (Auth::guard('web')->check()) {
            // melakukan pengecekan akun
            if (Auth::guard('web')->user()->level_akun_id == $level_akun_id) {
                return $next($request);
            } else {
                // mengembalikan ke halamannya masing-masing jika mencoba akses halaman lain
                return Redirect::back(); 
            }
        } else { // halaman redirect jika akun tidak ada atau tidak sesau
            return Redirect::back(); 
            // return redirect('/');
        }

        // pengaturan redirect halaman cabang dan pimda
        // if (Auth::guard('web')->user()->level_akun_id == 2) {
        //     return redirect('/mawar-mekar/pimda');
        // } elseif (Auth::guard('web')->user()->level_akun_id == 3) {
        //     return redirect('/mawar-mekar/cabang');
        // } 
    }
}
