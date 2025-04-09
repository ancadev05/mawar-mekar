<?php

namespace App\Livewire\Raker;

use App\Models\Pesilat;
use Livewire\Component;

class RakerIndex extends Component
{
    public $pesilat_id, $tingkatan_id, $cabang_id, $kehadiran, $ket;

    public function render()
    {
        $pesilats = Pesilat::whereNotIn('jenjang', [1])
        ->orderBy('tingkatan_id', 'desc')->orderBy('tahun_masuk_ts', 'asc')->orderBy('nama_pesilat', 'asc')
        ->get();

        return view('livewire.raker.raker-index', compact('pesilats'));
    }

    public function updatedPesilatId()
    {
        // dd('masuk');
        $pesilat = Pesilat::find($this->pesilat_id);

        // dd($pesilat->cabang);

        $this->tingkatan_id = $pesilat->tingkatan->tingkat;
        $this->cabang_id = $pesilat->cabang->cabang;
    }
}
