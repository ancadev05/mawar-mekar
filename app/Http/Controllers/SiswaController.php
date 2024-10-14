<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    //  menampilkan data siswa
    public function index()
    {
        // menampilkan semua daftar siswa untuk cabang tertentu
        if (Auth::guard('web')->user()->level_akun_id == 3) {
            // mencari cabang id yang login
            $cabang_id = Auth::guard('web')->user()->cabang_id;
            // mengambil siswa sesuai cabang dan sudah di approve oleh pimda
            $siswa = Pesilat::where('jenjang', 1)->where('cabang_id', $cabang_id)
            ->orderBy('tingkatan_id', 'desc')->orderBy('tahun_masuk_ts', 'asc')
            ->get();

            return view('pesilat.siswa', compact('siswa'));
        } else {
            // menampilkan seluruh siswa jika yang login admin pimda
            $siswa = Pesilat::where('jenjang', 1)
            ->orderBy('tingkatan_id', 'desc')->orderBy('tahun_masuk_ts', 'asc')
            ->get();

            return view('pesilat.siswa', compact('siswa'));
        }
    }
}
