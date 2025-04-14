<?php

namespace App\Http\Controllers;

use App\Models\PesertaUkt;
use App\Models\Pesilat;
use Illuminate\Http\Request;
use PhpParser\NodeVisitor\CommentAnnotatingVisitor;

class PendaftaranUktController extends Controller
{
    public function index(Request $request)
    {
        if ($request->no_regis) {
            $regis = $request->no_regis;

            $pesilat = Pesilat::where('no_registrasi', $regis)->first();
            
            if ($pesilat) {
                $status = PesertaUkt::where('pesilat_id', $pesilat->id)->first();
                return view('pendaftaran-ukts.index', compact('pesilat', 'status'));
            } else {
                return redirect('/pendaftaran-ukt')->with('failed', 'Data tidak ditemukan!');
            }
        }         

        $pesilat = false;

        return view('pendaftaran-ukts.index', compact('pesilat'));
    }

    public function ikutiUjian($id)
    {
        PesertaUkt::create([
            'pesilat_id' => $id,
            'data_ujian_id' => 1,
            'pembayaran' => 0,
        ]);

        return redirect()->route('status.pendaftaran', $id);
    }

    public function statusPendaftaran($id)
    {
        $peserta = Pesilat::find($id);
        return view('pendaftaran-ukts.statrus-pendaftaran', compact('peserta'));
    }

    // controller admin
    public function adminUkt() 
    {
        $total_pendaftar = PesertaUkt::count();
        $peserta = PesertaUkt::all();
        return view('pendaftaran-ukts.admin-dashboard', compact(
        'total_pendaftar',
            'peserta',
        ));
    }

    public function pesertaUkt()
    {
        $peserta = PesertaUkt::all();

        return view('pendaftaran-ukts.admin-peserta-ukts', compact('peserta'));
    }
}
