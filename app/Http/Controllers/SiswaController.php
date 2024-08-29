<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //  menampilkan data siswa
    public function index()
    {
        $pesilats = Pesilat::where('jenjang', 1)->orderBy('tingkatan_id', 'desc')->get();

        return view('pesilat.siswa', compact('pesilats'));
    }
}
