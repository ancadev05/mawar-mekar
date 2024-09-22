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

     // menyetujui pesilat yang baru registrasi tahun 2024 ke atas
    public function pesilatapprove() {
        $pesilats = Pesilat::where('validasi', 0)->latest()->get();

        return view('pesilat.pesilat-approve', compact('pesilats'));
    }

     public function pesilat_approve_selesai()
     {
        $pesilats = Pesilat::where('validasi', 1)->where('tahun_masuk_ts', 2024)->get();

        return view('pesilat.pesilat-approve-selesai', compact('pesilats'));
     }

    //  funsi approve pesilat
     public function approve(string $no_registrasi) 
     {
        $pesilat = [
            'validasi' => 1,
        ];

        Pesilat::where('no_registrasi', $no_registrasi)->update($pesilat);
     }

    //  batalkan approve pesilat
    public function approve_batal(string $no_registrasi) 
     {
        $pesilat = [
            'validasi' => 0,
        ];

        Pesilat::where('no_registrasi', $no_registrasi)->update($pesilat);
     }
}
