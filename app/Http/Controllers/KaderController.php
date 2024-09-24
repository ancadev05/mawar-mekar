<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class KaderController extends Controller
{
    //  menampilkan data kader
    public function index()
    {
        // menampilkan semua daftar kader untuk cabang tertentu
        if (Auth::guard('web')->user()->level_akun_id == 3) {
            // mencari cabang id yang login
            $cabang_id = Auth::guard('web')->user()->cabang_id;
            // mengambil kader sesuai cabang dan sudah di approve oleh pimda
            $kader = Pesilat::where('jenjang', 2)->where('validasi', 1)->where('cabang_id', $cabang_id)
            ->orderBy('tingkatan_id', 'desc')->orderBy('tahun_masuk_ts', 'asc')
            ->get();

            return view('pesilat.kader', compact('kader'));
        } else {
            // menampilkan seluruh kader jika yang login admin pimda
            $kader = Pesilat::where('jenjang', 2)->where('validasi', 1)
            ->orderBy('tingkatan_id', 'desc')->get();

            return view('pesilat.kader', compact('kader'));
        }
    }
}
