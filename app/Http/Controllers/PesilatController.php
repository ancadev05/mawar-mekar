<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Cabang;
use App\Models\Pesilat;
use App\Models\Tingkatan;
use Illuminate\Http\Request;
use App\Imports\PesilatImport;
use App\Models\Ukt;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

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
        $ukt = Ukt::get();
        
        $tingkat_pendidikan = array('SD/MI', 'SMP/MTs', 'SMA/MA', 'S1', 'S2', 'S3', 'Lainnya');

        return view('pesilat.pesilat-create', compact(
            'cabangs', 'units', 'tingkatans', 'tingkat_pendidikan', 'ukt'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nik' => 'required',
            'nama_pesilat' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'tahun_masuk_ts' => 'required',
            'cabang_id' => 'required',
            'tingkatan_id' => 'required'
        ]);

        // generate foto
        $file_name = false;
        // Jika user upload gambar
        if ($request->hasFile('foto-pesilat')) {
            // Validasi gambar
            $file = $request->file('foto-pesilat'); // mengambil file dari form
            $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension(); // meriname file, antisipasi nama file double. memberi nama file dengan gabung extensi
            $file->storeAs('public/foto-pesilat/', $file_name); // memindahkan file ke folder public agar bisa diakses
        }

        // mencari no cabang
        $no_cabang = Cabang::where('id', $request->cabang_id)->first();
        $cabang = $no_cabang->no_cabang;

        // mencari no regis
        $regis = $this->generateregis($request->tahun_masuk_ts);

        // generate no registrasi
        $no_registrasi = '177.' . $cabang . '.' . $request->tahun_masuk_ts . '.' . $regis;

        // validasi siswa baru
        if ($request->tahun_masuk_ts == 2024) {
            $validasi = 0;
        } else {
            $validasi = 1;
        }
        

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
            'foto_pesilat' => $file_name,
            'validasi' => $validasi,
            'ket' => $request->ket,
        ];

        Pesilat::create($pesilat);

        // mencari no registrasi untuk di download setelah data tersimpan
        $pesilat = Pesilat::get()->last();
        $pesilat_id = $pesilat->id;

        return redirect('/pesilat/' . $pesilat_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesilat = Pesilat::where('id', $id)->first();

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
        $tingkat_pendidikan = array('SD/MI', 'SMP/MTs', 'SMA/MA', 'S1', 'S2', 'S3', 'Lainnya');

        return view('pesilat.pesilat-edit', compact(
            'cabangs',
            'units',
            'tingkatans',
            'pesilat',
            'tingkat_pendidikan'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validasi gambar baru
        if ($request->hasFile('foto-pesilat')) { // Jika ada gambar baru
            // Lakukan validasi
            $file = $request->file('foto-pesilat'); // mengambil file dari form
            $file_name = date('ymdhis') . '.' . $file->getClientOriginalExtension(); // penamaan file, antisipasi nama file double
            $file->storeAs('public/foto-pesilat/', $file_name); // memindahkan file ke folder public agar bisa diakses dengan nama yang unik
            // Hapus foto lama
            Storage::delete('public/foto-pesilat/' . $request->file_lama);
            // Masukkan namanya ke dalam database
            $pesilat['foto_pesilat'] = $file_name;
            Pesilat::where('id', $id)->update($pesilat);
        } 

        // ambil data
        $pesilat = [
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
            'ket' => $request->ket,
        ];

        Pesilat::where('id', $id)->update($pesilat);

        // mengambil no regis
        $pesilat = Pesilat::where('id', $id)->first();
        $pesilat_id = $pesilat->id;

        return redirect('/pesilat/' . $pesilat_id);
    }

    /**
     * Remove the specifiepesilat resource from storage.
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
