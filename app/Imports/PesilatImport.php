<?php

namespace App\Imports;

use App\Models\Pesilat;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PesilatImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
        $i = 1;
        foreach ($collection as $row) {
            if ($i > 1) {
                // memasukkan data ke tabel
                $pesilats = [
                    'no_registrasi'         => !empty($row[1]) ? $row[1] : '', // membuat pengkondisian jika data kosong,
                    'regis'                 => !empty($row[2]) ? $row[2] : '',
                    'nik'                   => !empty($row[3]) ? $row[3] : '',
                    'nama_pesilat'          => !empty($row[4]) ? $row[4] : '',
                    'tempat_lahir'          => !empty($row[5]) ? $row[5] : '',
                    'tgl_lahir'             => !empty($row[6]) ? $row[6] : '',
                    'jk'                    => !empty($row[7]) ? $row[7] : '',
                    'agama'                 => !empty($row[8]) ? $row[8] : '',
                    'alamat'                => !empty($row[9]) ? $row[9] : '',
                    'no_hp'                 => !empty($row[10]) ? $row[10] : '',
                    'nama_ayah'             => !empty($row[11]) ? $row[11] : '',
                    'nama_ibu'              => !empty($row[12]) ? $row[12] : '',
                    'nama_wali'             => !empty($row[13]) ? $row[13] : '',
                    'pekerjaan_ayah'        => !empty($row[14]) ? $row[14] : '',
                    'pekerjaan_ibu'         => !empty($row[15]) ? $row[15] : '',
                    'pekerjaan_wali'        => !empty($row[16]) ? $row[16] : '',
                    'alamat_orangtua_wali'  => !empty($row[17]) ? $row[17] : '',
                    'hp_orangtua_wali'      => !empty($row[18]) ? $row[18] : '',
                    'tingkat_pendidikan'    => !empty($row[19]) ? $row[19] : '',
                    'gelar_akademik'        => !empty($row[20]) ? $row[20] : '',
                    'asal_sekolah_instansi' => !empty($row[21]) ? $row[21] : '',
                    'tahun_masuk_ts'        => !empty($row[22]) ? $row[22] : '',
                    'jenjang'               => !empty($row[23]) ? $row[23] : '',
                    'nbts'                  => !empty($row[24]) ? $row[24] : '',
                    'nbm'                   => !empty($row[25]) ? $row[25] : '',
                    'cabang_id'             => !empty($row[26]) ? $row[26] : '',
                    'unit_id'               => !empty($row[27]) ? $row[27] : '',
                    'tingkatan_id'          => !empty($row[28]) ? $row[28] : '',
                    'ukt_terakhir'          => !empty($row[29]) ? $row[29] : '',
                    'foto_pesilat'          => !empty($row[30]) ? $row[30] : '',
                    'ket'                   => !empty($row[31]) ? $row[31] : '',
                ];

                Pesilat::create($pesilats);
            }
            $i++;
        }
    }
}
