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

        // dd($infologin);

        //  proses pengecekan jika email dan password terdaftar
        if (Auth::guard()->attempt($infologin)) {
            // mengarahkan kehalaman sesuai level username
            return redirect('/mawar-mekar');
        } else {
            return redirect('/login')->withErrors('username dan password tidak sesuai')->withInput();
        }
    }

    // function logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
