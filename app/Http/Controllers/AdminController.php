<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    // dashboard pimda
    public function dashboard()
    {
        // total laki-laki dan perempuna setiap jenjang
        $pesilat_total = Pesilat::select('jk', 'jenjang', DB::raw('count(*) as total'))
        ->groupBy('jk', 'jenjang')
        ->orderBy('jenjang', 'desc')
        ->get();

        // totoal pesilat setiap jenjang
        $pesilat_jenjang = Pesilat::select('jenjang', DB::raw('count(*) as total'))
        ->groupBy('jenjang')
        ->orderBy('jenjang', 'desc')
        ->get();

        // detail total tingkat siswa
        // mc 4
        $mc4_l = DB::table('pesilats')->where('jk', 'L')->where('tingkatan_id', 5)->get()->count();
        $mc4_p = DB::table('pesilats')->where('jk', 'P')->where('tingkatan_id', 5)->get()->count();
        $mc4_jml = $mc4_l + $mc4_p;
        // mc 3
        $mc3_l = DB::table('pesilats')->where('jk', 'L')->where('tingkatan_id', 4)->get()->count();
        $mc3_p = DB::table('pesilats')->where('jk', 'P')->where('tingkatan_id', 4)->get()->count();
        $mc3_jml = $mc3_l + $mc3_p;
        // mc 2
        $mc2_l = DB::table('pesilats')->where('jk', 'L')->where('tingkatan_id', 3)->get()->count();
        $mc2_p = DB::table('pesilats')->where('jk', 'P')->where('tingkatan_id', 3)->get()->count();
        $mc2_jml = $mc2_l + $mc2_p;
        // mc 1
        $mc1_l = DB::table('pesilats')->where('jk', 'L')->where('tingkatan_id', 2)->get()->count();
        $mc1_p = DB::table('pesilats')->where('jk', 'P')->where('tingkatan_id', 2)->get()->count();
        $mc1_jml = $mc1_l + $mc1_p;
        // mc dasar
        $mc_dasar_l = DB::table('pesilats')->where('jk', 'L')->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_p = DB::table('pesilats')->where('jk', 'P')->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_jml = $mc_dasar_l + $mc_dasar_p;

        // menampilkan jumlah siswa percabang
        // $siswa_cabang = DB::table('pesilats')->select('cabang_id', DB::raw('count(*) as total'))->groupBy('cabang_id')->get();
        $siswa_cabang = Pesilat::select('cabang_id', DB::raw('count(*) as total'))->groupBy('cabang_id')->get();

        return view('admin.dashboard', compact(
            'pesilat_total', 
            'pesilat_jenjang',
            // data siswa
            'mc4_l',
            'mc4_p',
            'mc4_jml',
            'mc3_l',
            'mc3_p',
            'mc3_jml',
            'mc2_l',
            'mc2_p',
            'mc2_jml',
            'mc1_l',
            'mc1_p',
            'mc1_jml',
            'mc_dasar_l',
            'mc_dasar_p',
            'mc_dasar_jml',
            'siswa_cabang',
        ));
    }

    public function dashboard_cabang()
    {
        // data yang ditampilkan sesuai dengan cabang masing-masing
        $cabang = Auth::guard('web')->user()->cabang_id;
        
        // total laki-laki dan perempuna setiap jenjang
        $pesilat_total = Pesilat::whereNotIn('jenjang', [3])->where('cabang_id', $cabang)
        ->select('jk', 'jenjang', DB::raw('count(*) as total'))
        ->groupBy('jk', 'jenjang')
        ->orderBy('jenjang', 'desc')
        ->get();

        // totoal pesilat setiap jenjang
        $pesilat_jenjang = Pesilat::whereNotIn('jenjang', [3])->where('cabang_id', $cabang)
        ->select('jenjang', DB::raw('count(*) as total'))
        ->groupBy('jenjang')
        ->orderBy('jenjang', 'desc')
        ->get();

        // detail total tingkat siswa
        // mc 4
        $mc4_l = DB::table('pesilats')->where('jk', 'L')->where('cabang_id', $cabang)->where('tingkatan_id', 5)->get()->count();
        $mc4_p = DB::table('pesilats')->where('jk', 'P')->where('cabang_id', $cabang)->where('tingkatan_id', 5)->get()->count();
        $mc4_jml = $mc4_l + $mc4_p;
        // mc 3
        $mc3_l = DB::table('pesilats')->where('jk', 'L')->where('cabang_id', $cabang)->where('tingkatan_id', 4)->get()->count();
        $mc3_p = DB::table('pesilats')->where('jk', 'P')->where('cabang_id', $cabang)->where('tingkatan_id', 4)->get()->count();
        $mc3_jml = $mc3_l + $mc3_p;
        // mc 2
        $mc2_l = DB::table('pesilats')->where('jk', 'L')->where('cabang_id', $cabang)->where('tingkatan_id', 3)->get()->count();
        $mc2_p = DB::table('pesilats')->where('jk', 'P')->where('cabang_id', $cabang)->where('tingkatan_id', 3)->get()->count();
        $mc2_jml = $mc2_l + $mc2_p;
        // mc 1
        $mc1_l = DB::table('pesilats')->where('jk', 'L')->where('cabang_id', $cabang)->where('tingkatan_id', 2)->get()->count();
        $mc1_p = DB::table('pesilats')->where('jk', 'P')->where('cabang_id', $cabang)->where('tingkatan_id', 2)->get()->count();
        $mc1_jml = $mc1_l + $mc1_p;
        // mc dasar
        $mc_dasar_l = DB::table('pesilats')->where('jk', 'L')->where('cabang_id', $cabang)->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_p = DB::table('pesilats')->where('jk', 'P')->where('cabang_id', $cabang)->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_jml = $mc_dasar_l + $mc_dasar_p;

        return view('admin.dashboard-cabang', compact(
            'pesilat_total', 
            'pesilat_jenjang',
            // data siswa
            'mc4_l',
            'mc4_p',
            'mc4_jml',
            'mc3_l',
            'mc3_p',
            'mc3_jml',
            'mc2_l',
            'mc2_p',
            'mc2_jml',
            'mc1_l',
            'mc1_p',
            'mc1_jml',
            'mc_dasar_l',
            'mc_dasar_p',
            'mc_dasar_jml',
        ));
    }

    public function dashboard_pesilat()
    {
        $pesilat_id = Auth::guard('pesilat')->user()->id;
        $pesilat = Pesilat::where('id', $pesilat_id)->first();
        return view('admin.dashboard-pesilat', compact('pesilat'));
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
        $pesilats = Pesilat::where('validasi', 1)->where('tahun_masuk_ts', '>=', 2024)->get();

        return view('pesilat.pesilat-approve-selesai', compact('pesilats'));
     }

    //  funsi approve pesilat
     public function approve(string $id) 
     {
        $pesilat = [
            'validasi' => 1,
        ];

        Pesilat::where('id', $id)->update($pesilat);

        return redirect('/pesilat-approve')->with('success', 'Approve siswa berhasil');
     }

    //  batalkan approve pesilat
    public function approve_batal(string $id) 
     {
        $pesilat = [
            'validasi' => 0,
        ];

        Pesilat::where('id', $id)->update($pesilat);

        return redirect('/pesilat-approve-selesai')->with('success', 'Approve berhasil dibatalkan');
     }
}
