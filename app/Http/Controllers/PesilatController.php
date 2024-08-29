<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Cabang;
use App\Models\Pesilat;
use App\Models\Tingkatan;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PesilatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cabangs = Cabang::get();
        $units = Unit::get();
        $tingkatans = Tingkatan::get();

        return view('pesilat.pesilat-create', compact('cabangs', 'units', 'tingkatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'nik' => 'required',
        //     'nama_pesilat' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tgl_lahir' => 'required',
        //     'jk' => 'required',
        //     'agama' => 'required',
        //     'alamat' => 'required',
        //     'tahun_masuk_ts' => 'required',
        //     'cabang_id' => 'required',
        //     'tingkatan_id' => 'required'
        // ]);

        // dd($request->all());

        // mencari no cabang
        $no_cabang = Cabang::where('id', $request->cabang_id)->first();
        $cabang = $no_cabang->no_cabang;

        // mencari no regis
        $regis = $this->generateregis($request->tahun_masuk_ts);

        // generate no registrasi
        $no_registrasi = '177.' . $cabang . '.' . $request->tahun_masuk_ts . '.' . $regis;

        $pesilat = [
            'no_registrasi' => $no_registrasi,
            'regis' => $regis,
            'nik' => $request->nik,
            'nama_pesilat' => $request->nama_pesilat,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat_orangtua_wali' => $request->alamat_orangtua_wali,
            'hp_orangtua_wali' => $request->hp_orangtua_wali,
            'tingkat_pendidikan' => $request->tingkat_pendidikan,
            'gelar_akademik' => $request->gelar_akademik,
            'asal_sekolah_instansi' => $request->asal_sekolah_instansi,
            'tahun_masuk_ts' => $request->tahun_masuk_ts,
            'jenjang' => $request->jenjang,
            'nbts' => $request->nbts,
            'nbm' => $request->nbm,
            'cabang_id' => $request->cabang_id,
            'unit_id' => $request->unit_id,
            'tingkatan_id' => $request->tingkatan_id,
            'ukt_terakhir' => $request->ukt_terakhir,
            'foto_pesilat' => $request->foto_pesilat,
            'ket' => $request->ket,
        ];

        Pesilat::create($pesilat);

        // mencari no registrasi untuk di download setelah data tersimpan
        $pesilat = Pesilat::get()->last();
        $pesilat_registrasi = $pesilat->no_registrasi;

        return redirect('/pesilat/' . $pesilat_registrasi);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesilat = Pesilat::where('no_registrasi', $id)->first();

        return view('pesilat.pesilat-show', compact(
            'pesilat'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cabangs = Cabang::get();
        $units = Unit::get();
        $tingkatans = Tingkatan::get();
        $pesilat = Pesilat::where('id', $id)->first();

        return view('pesilat.pesilat-edit', compact(
            'cabangs',
            'units',
            'tingkatans',
            'pesilat'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // registrasi pesilat
    public function registrasi()
    {
        return view('pesilat.pesilat-registrasi');
    }

    // untuk cari data pesilat
    public function caripesilat(Request $request)
    {
        $registrasi = $request->no_registrasi;

        if (strlen($registrasi)) {

            $pesilat = Pesilat::where('no_registrasi', 'like', "%$registrasi%")->first();

            if ($pesilat) {
                return redirect('/pesilat/' . $pesilat->no_registrasi);
            }
        }
        $pesilat = Pesilat::where('no_registrasi', $registrasi)->first();

        return redirect('/')->with('not', 'Data tidak ditemukan');
    }

    // generate registrasi
    public function generateregis($tahun_masuk_ts)
    {
        // Ambil regi terakhir untuk tahun masuk yang sama
        $last_pesilat = DB::table('pesilats')
            ->where('tahun_masuk_ts', $tahun_masuk_ts)
            ->orderBy('regis', 'desc')
            ->first();

        if ($last_pesilat) {
            // Ambil empat digit terakhir dari regis terakhir dan tambahkan 1
            $last_regis = (int)substr($last_pesilat->regis, -4);
            $new_regis = $last_regis + 1;
        } else {
            // Jika belum ada, mulai dengan 0001
            $new_regis = 1;
        }

        // Format NIS baru
        return str_pad($new_regis, 4, '0', STR_PAD_LEFT);
    }
}
