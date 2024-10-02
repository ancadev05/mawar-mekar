<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use App\Models\LevelAkun;
use App\Models\User;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user-admin.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $level_akun = LevelAkun::orderBy('id', 'desc')->take(2)->get();
        $cabangs = Cabang::all();
        return view('user-admin.user-create', compact('level_akun', 'cabangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $user = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'level_akun_id' => $request->level_akun_id,
            'cabang_id' => $request->cabang_id,
            'ket' => $request->ket
        ];

        User::create($user);

        return redirect('/user')->with('success', 'Berhasil tambah user admin!');
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
        $level_akun = LevelAkun::get();
        $cabangs = Cabang::get();
        $user = User::where('id', $id)->first();

        return view('user-admin.user-edit', compact(
            'level_akun', 'cabangs', 'user'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = [
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password,
            'level_akun_id' => $request->level_akun_id,
            'cabang_id' => $request->cabang_id,
            'ket' => $request->ket
        ];

        User::where('id', $id)->update($user);

        return redirect('/user')->with('success', 'Berhasil edit user admin!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/user')->with('success', 'Berhasil hapus user admin!');
    }
}
