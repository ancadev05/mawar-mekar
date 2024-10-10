<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // validasi username dan password
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required'
            ]
        );

        // menampung isi username dan password
        $infologin = [
            'username' => $request->username,
            'password' => $request->password
        ];

        //  proses pengecekan jika email dan password terdaftar pada tabel user default
        if ($request->login == 1) {
            if (Auth::guard('web')->attempt($infologin)) {
                // mengarahkan kehalaman dashboard sesuai level username atau jenis akun
                // admin pimda
                if (Auth::guard('web')->user()->level_akun_id == 2) {
                    return redirect('/mawar-mekar/pimda');
                } elseif (Auth::guard('web')->user()->level_akun_id == 3) { // jika level cabang
                    return redirect('/mawar-mekar/cabang');
                }
            }
        }

        // pengecekan jika login sebagai pesilat
        if ($request->login == 2) {
            if (Auth::guard('pesilat')->attempt($infologin)) {
                // mengarahkan kehalaman dashboar pesilat sesuai level username atau jenis akun
                return redirect('/mawar-mekar/pesilat');
            }
        }

        return redirect('/login')->withErrors('username dan password tidak sesuai')->withInput();
    }

    // function logout
    public function logout()
    {
        // Auth::logout();
        // return redirect('/');

        // logout untuk admin
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
            return redirect('/');
        }

        // logout untuk pesilat
        if (Auth::guard('pesilat')->check()) {
            Auth::guard('pesilat')->logout();
            return redirect('/');
        }
    }
}
