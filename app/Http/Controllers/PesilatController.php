<?php

namespace App\Http\Controllers;

use App\Models\Pesilat;
use Illuminate\Http\Request;

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
        return view('pesilat.pesilat-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pesilat = [
            'no_registrasi' => $request->nik,
            'nik' => $request->nik,
            'nama_pesilat' => $request->ok,
            'tempat_lahir' => $request->ok,
            'tgl_lahir' => $request->ok,
            'jk' => $request->ok,
            'agama' => $request->ok,
            'alamat' => $request->ok,
            'no_hp' => $request->ok,
            'nama_ayah' => $request->ok,
            'nama_ibu' => $request->ok,
            'nama_wali' => $request->ok,
            'pekerjaan_ayah' => $request->ok,
            'pekerjaan_ibu' => $request->ok,
            'pekerjaan_wali' => $request->ok,
            'alamat_orangtua_wali' => $request->ok,
            'hp_orangtua_wali' => $request->ok,
            'tingkat_pendidikan' => $request->ok,
            'gelar_akademik' => $request->ok,
            'asal_sekolah_instansi' => $request->ok,
            'tahun_masuk_ts' => $request->ok,
            'jenjang' => $request->ok,
            'nbts' => $request->ok,
            'nbm' => $request->ok,
            'cabang_id' => $request->ok,
            'unit_id' => $request->ok,
            'tingkatan_id' => $request->ok,
            'ukt_terakhir' => $request->ok,
            'ket' => $request->ok,
        ];

        Pesilat::create($pesilat);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    public function registrasi()
    {
        return view('pesilat.pesilat-registrasi');
    }

    public function caripesilat(Request $request)
    {
        $registrasi = $request->no_registrasi;

        if (strlen($registrasi)) {

            $pesilat = Pesilat::where('no_registrasi', 'like', "%$registrasi%")->first();

            if ($pesilat) {
                return view('pesilat.pesilat-show', compact(
                    'laptop'
                ));
            }
        }
        $pesilat = Pesilat::where('no_registrasi', $registrasi)->first();

        return redirect('/')->with('not', 'Data tidak ditemukan');
    }
}
