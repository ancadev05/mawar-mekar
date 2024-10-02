<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Cabang;
use App\Imports\UnitsImport;
use App\Models\Pesilat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('web')->user()->level_akun_id == 3) {
            $cabang = Auth::guard('web')->user()->cabang_id;

            $units = Unit::where('cabang_id', $cabang)->get();

            return view('unit.index', compact('units', 'cabang'));
        } 

        $units = Unit::orderBy('cabang_id', 'asc')->get();

        return view('unit.index', compact('units',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::guard('web')->user()->level_akun_id == 3) {
            $cabang_id = Auth::guard('web')->user()->cabang_id;
            $cabang = Cabang::where('id', $cabang_id)->first()->cabang;
            $kaders = Pesilat::where('cabang_id', $cabang_id)->get();
            return view('unit.unit-create-2', compact('cabang', 'kaders'));
        } 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'unit' => 'required',
        ]);

        if ($request == false) {
            return redirect('/unit')->with('error', 'Gagal tambah unit latihan!');
        }

        $cabang_id = Auth::guard('web')->user()->cabang_id;

        $penanggung_jawab = $request->penanggung_jawab;
        $pelatih = implode(', ', $penanggung_jawab);

        $unit = [
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'penanggung_jawab' => $pelatih,
            'ket' => $request->ket,
            'cabang_id' => $cabang_id,
        ];

        Unit::create($unit);

        return redirect('/unit')->with('success', 'Berhasil tambah unit latihan!');
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
        $unit = Unit::where('id', $id)->first();

        return view('unit.unit-edit', compact('unit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cabang = Auth::guard('web')->user()->cabang_id;
        $unit = [
            'cabang_id' => $cabang,
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'penanggung_jawab' => $request->penanggung_jawab,
            'ket' => $request->ket,
        ];

        Unit::where('id', $id)->update($unit);

        return redirect('/unit')->with('success', 'Berhasil update unit latihan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Unit::where('id', $id)->delete();
        return redirect('/unit')->with('success', 'Berhasil hapus unit latihan!');
    }

    // untuk import data lewat excel
    public function unitimport(Request $request)
    {
        if ($request) {
            Excel::import(new UnitsImport(), $request->file('file'));
        }

        return redirect('/unit');
    }
}
