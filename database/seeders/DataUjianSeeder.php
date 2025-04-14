<?php

namespace Database\Seeders;

use App\Models\DataUjian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataUjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_ujian = [
            [
                'tempat' => 'Ponpes Darul Huffadz',
                'alamat' => 'Bissoloro, Bungaya',
                'tgl_awal' => '2025-04-18',
                'tgl_akhir' => '2025-04-20',
                'jenis_ukt' => 'siswa',
                'status_ujian' => 'on',
            ]
        ];

        foreach ($data_ujian as $key => $value) {
            DataUjian::create($value);
        }
    }
}
