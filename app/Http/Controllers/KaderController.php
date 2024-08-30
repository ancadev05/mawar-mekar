<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use Maatwebsite\Excel\Facades\Excel;

class KaderController extends Controller
{
    //  menampilkan data kader
    public function index()
    {
        $pesilats = Pesilat::where('jenjang', 2)->orderBy('tingkatan_id', 'desc')->get();

        return view('pesilat.kader', compact('pesilats'));
    }
}
