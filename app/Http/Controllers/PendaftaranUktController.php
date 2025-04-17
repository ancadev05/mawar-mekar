<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use App\Models\PesertaUkt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\NodeVisitor\CommentAnnotatingVisitor;

class PendaftaranUktController extends Controller
{
    public function index(Request $request)
    {
        if ($request->no_regis) {
            $regis = $request->no_regis;

            $pesilat = Pesilat::where('no_registrasi', $regis)->first();

            // if ($pesilat->jenjang != 1 or $pesilat->jenjang == null) {
            //     return redirect('/pendaftaran-ukt')->with('failed', 'Ujian hanya untuk siswa!');
            // }

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
        // detail peserta ukt
        // mc 4
        $mc4_l = Pesilat::whereHas('pesertaUkt')->where('jk', 'L')->where('tingkatan_id', 5)->get()->count();
        $mc4_p = Pesilat::whereHas('pesertaUkt')->where('jk', 'P')->where('tingkatan_id', 5)->get()->count();
        $mc4_jml = $mc4_l + $mc4_p;
        // mc 3
        $mc3_l = Pesilat::whereHas('pesertaUkt')->where('jk', 'L')->where('tingkatan_id', 4)->get()->count();
        $mc3_p = Pesilat::whereHas('pesertaUkt')->where('jk', 'P')->where('tingkatan_id', 4)->get()->count();
        $mc3_jml = $mc3_l + $mc3_p;
        // mc 2
        $mc2_l = Pesilat::whereHas('pesertaUkt')->where('jk', 'L')->where('tingkatan_id', 3)->get()->count();
        $mc2_p = Pesilat::whereHas('pesertaUkt')->where('jk', 'P')->where('tingkatan_id', 3)->get()->count();
        $mc2_jml = $mc2_l + $mc2_p;
        // mc 1
        $mc1_l = Pesilat::whereHas('pesertaUkt')->where('jk', 'L')->where('tingkatan_id', 2)->get()->count();
        $mc1_p = Pesilat::whereHas('pesertaUkt')->where('jk', 'P')->where('tingkatan_id', 2)->get()->count();
        $mc1_jml = $mc1_l + $mc1_p;
        // mc dasar
        $mc_dasar_l = Pesilat::whereHas('pesertaUkt')->where('jk', 'L')->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_p = Pesilat::whereHas('pesertaUkt')->where('jk', 'P')->where('tingkatan_id', 1)->get()->count();
        $mc_dasar_jml = $mc_dasar_l + $mc_dasar_p;

        // menampilkan jumlah siswa percabang
        $siswa_cabang = Pesilat::whereHas('pesertaUkt')->where('jenjang', 1)->orderBy('cabang_id', 'asc')->select('cabang_id', DB::raw('count(*) as total'))->groupBy('cabang_id')->get();

        $total_pendaftar = PesertaUkt::count();
        $peserta = PesertaUkt::all();
        return view('pendaftaran-ukts.admin-dashboard', compact(
            'total_pendaftar',
            'peserta',
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

    public function pesertaUkt()
    {
        $peserta = PesertaUkt::all();

        return view('pendaftaran-ukts.admin-peserta-ukts', compact('peserta'));
    }

    public function hapusPesertaUkt($id)
    {
        PesertaUkt::find($id)->delete();
        return redirect()->to('/peserta-ukt');
    }
    public function registrasi($id)
    {
        $peserta = PesertaUkt::find($id);
        return view('pendaftaran-ukts.registrasi', compact('peserta'));
    }

    public function registrasiUpdate(Request $request, string $id)
    {
        $status_pembayaran = 
        PesertaUkt::find($id)->update([
            'pembayaran' => $request->pembayaran,
            'status_pembayaran' => $request->status_pembayaran,
            'ket' => $request->ket,
        ]);

        return redirect()->to('/peserta-ukt');
    }

    public function idcard()
    {
        $idcard = PesertaUkt::where('status_pembayaran', 'lunas')->get();
        return view('pendaftaran-ukts.admin-idcard', compact('idcard'));
    }

    public function cetakIdcard()
    { 
        $idcard = PesertaUkt::where('status_pembayaran', 'lunas')->get();
        return view('pendaftaran-ukts.cetak-idcard', compact('idcard'));
    }

    public function soalUkt()
    {
        return view('pendaftaran-ukts.soal-ukt');
    }


}
