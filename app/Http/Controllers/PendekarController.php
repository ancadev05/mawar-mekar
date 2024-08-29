<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;

class PendekarController extends Controller
{
    //  menampilkan data pendekar
    public function index()
    {
        $pesilats = Pesilat::where('jenjang', 3)->orderBy('tingkatan_id', 'desc')->get();

        return view('pesilat.pendekar', compact('pesilats'));
    }
}
