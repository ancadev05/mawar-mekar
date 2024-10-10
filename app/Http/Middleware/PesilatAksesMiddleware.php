<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class PesilatAksesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $validasi): Response
    {
        // pengaturan hak akses berdasar level akun
        // mengecek terlebih dahulu jenis akun yang login
        if (Auth::guard('pesilat')->check()) {
            // pesilat hanya bisa masuk keaplikasi ketika sudah tervalidasi pimda
            if (Auth::guard('pesilat')->user()->validasi == $validasi) {
                return $next($request);
            } else {
                // mengembalikan ke halamannya masing-masing jika mencoba akses halaman lain
                return Redirect::back(); 
            }
        } else { // mengarahkan kehalaman awal jika akun tidak sesuai
            return Redirect::back(); 
        }
    }
}
