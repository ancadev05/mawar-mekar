<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function tampilanSoal()
    {
        return view('soal.soal-tampilan');
    }
}
