<?php

namespace App\Http\Controllers;

use App\Imports\UnitsImport;
use App\Models\Cabang;
use App\Models\Unit;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cabang = 1;
        $units = Unit::get();
        return view('unit.index', compact('units', 'cabang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cabang = 1;
        return view('unit.unit-create', compact('cabang'));
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

        $cabang_id = 1;

        $unit = [
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'penanggung_jawab' => $request->penanggung_jawab,
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
        $cabang = 1;
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
