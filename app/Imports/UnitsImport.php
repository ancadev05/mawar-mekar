<?php

namespace App\Imports;

use App\Models\Unit;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UnitsImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        $i = 1; // melangkai judul kolom yang akan di ambil

        foreach ($collection as $row) {
            if ($i > 1) {
                // memasukkan data kedalam tabel sesuai nama field
                $units = [
                    'unit'              => !empty($row[1]) ? $row[1] : '', // membuat pengkondisian jika data kosong
                    'alamat'            => !empty($row[2]) ? $row[2] : '',
                    'penanggung_jawab'  => !empty($row[3]) ? $row[3] : '',
                    'ket'               => !empty($row[4]) ? $row[4] : '',
                    'cabang_id'         => !empty($row[5]) ? $row[5] : ''
                ];

                Unit::create($units);

                // dd($units);
            }
            $i++;
        }
    }
}
