<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function cekdata(Request $request)
    {
       
        if ($request) {
            $pesilat = Pesilat::where('no_registrasi', $request->no_registrasi)->first();
            return view('admin.cek-data', compact('pesilat'));
        } else {
            return view('admin.cek-data');
        }

        return view('admin.cek-data');
    }

     // untuk import data lewat excel
     public function pesilatimport(Request $request)
     {
         if ($request) {
             Excel::import(new PesilatImport(), $request->file('file'));
         }
 
         return redirect()->back();
     }
}
