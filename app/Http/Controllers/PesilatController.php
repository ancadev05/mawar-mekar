<?php

namespace App\Http\Controllers;

use App\Imports\PesilatImport;
use App\Models\Unit;
use App\Models\Cabang;
use App\Models\Pesilat;
use App\Models\Tingkatan;
use Illuminate\Http\Request;
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

        // pembuatan no registrasi
        // $no_registrasi = Pesilat::max('no_registrasi');
        // $no_registrasi = (int) $no_registrasi;
        // $no_registrasi = $no_registrasi + 1;
        // $no_registrasi = '177.' . $request->cabang_id . '.' . $request->tahun_masuk_ts . '.' . $no_registrasi;

        $pesilat = [
            'no_registrasi' => 500,
            'regis' => 500,
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
            'tahun_masuk_ts' => $request->tahun_masuk,
            'jenjang' => $request->jenjang,
            'nbts' => $request->nbts,
            'nbm' => $request->nbm,
            'cabang_id' => $request->cabang_id,
            // 'unit_id' => $request->unit_id,
            'unit_id' => 1,
            'tingkatan_id' => $request->tingkatan_id,
            'ukt_terakhir' => $request->ukt_terakhir,
            'ket' => $request->ket,
        ];

        Pesilat::create($pesilat);

        // mencari no registrasi untuk di download setelah data tersimpan
        // $pesilat = Pesilat::where('no_registrasi', $no_registrasi)->first();

        $pesilat = Pesilat::get()->last();
        $pesilat_id = $pesilat->id;

        return redirect('/pesilat/' . $pesilat_id);
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
        //
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

   
}
