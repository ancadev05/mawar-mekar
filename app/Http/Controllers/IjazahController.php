<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IjazahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pesilat-ijazah.index');
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
        //
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

    // menampilkan ijazah pertingkatan
    public function ijazahSatu()
    {
        return view('pesilat-ijazah.index');
    }
    public function ijazahDua()
    {
        return view('pesilat-ijazah.ijazah-2');
    }
    public function ijazahTiga()
    {
        return view('pesilat-ijazah.ijazah-3');
    }
    public function ijazahEmpat()
    {
        return view('pesilat-ijazah.ijazah-4');
    }
}
