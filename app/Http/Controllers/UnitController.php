<?php

namespace App\Http\Controllers;

use App\Imports\UnitsImport;
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
        $units = Unit::get();
        return view('unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);

        $request->validate([
            'name' => 'required',
        ]);

        $unit = [
            'unit' => $request->unit,
            'alamat' => $request->alamat,
            'penanggung_jawab' => $request->penanggung_jawab,
            'ket' => $request->ket,
            'cabang_id' => $request->cabang_id,
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

    // untuk import data lewat excel
    public function unitimport(Request $request)
    {
        if ($request) {
            Excel::import(new UnitsImport(), $request->file('file'));
        }

        return redirect('/unit');
    }
}
