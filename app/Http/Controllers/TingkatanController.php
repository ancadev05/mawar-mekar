<?php

namespace App\Http\Controllers;

use App\Models\Tingkatan;
use Illuminate\Http\Request;

class TingkatanController extends Controller
{
    public function getTingkatan(Request $request)
    {
        $jenjang = $request->jenjang;

        if ($jenjang == 1) {
            $tingkatan = Tingkatan::whereBetween('id', [1, 5])->get();
            return response()->json([$tingkatan][0]);
        }
        if ($jenjang == 2) {
            $tingkatan = Tingkatan::whereBetween('id', [6, 10])->get();
            return response()->json([$tingkatan][0]);
        }
        if ($jenjang == 3) {
            $tingkatan = Tingkatan::whereBetween('id', [11, 15])->get();
            return response()->json([$tingkatan][0]);
        }
    }
}
