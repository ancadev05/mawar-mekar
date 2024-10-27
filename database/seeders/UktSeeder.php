<?php

namespace Database\Seeders;

use App\Models\Ukt;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UktSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukt= [
            [
                'tempat' => 'Belum pernah',
                'alamat' => 'null',
                'tgl_awal' => '0000-00-00',
                'tgl_akhir' => '0000-00-00',
                'jenis_ukt' => 1,
            ],
            [
                'tempat' => 'Ponpes Darul Fallah Unismuh',
                'alamat' => 'Bissoloro, Kab. Gowa',
                'tgl_awal' => '2021-12-17',
                'tgl_akhir' => '2021-12-19',
                'jenis_ukt' => 1,
            ],
            [
                'tempat' => 'Perguruan Muhammadiyah Tombolo Pao',
                'alamat' => 'Tombolo Pao, Kab. Gowa',
                'tgl_awal' => '2022-01-27',
                'tgl_akhir' => '2022-01-29',
                'jenis_ukt' => 1,
            ],
            [
                'tempat' => 'Ponpes Sultan Hasanuddin',
                'alamat' => 'Pattunggalengan, Limbung, Kab. Gowa',
                'tgl_awal' => '2022-03-10',
                'tgl_akhir' => '2022-03-11',
                'jenis_ukt' => 1,
            ],
            [
                'tempat' => 'Lapangan Pusat Dakwah Muhammadiyah',
                'alamat' => 'Kab. Gowa',
                'tgl_awal' => '2022-10-07',
                'tgl_akhir' => '2022-10-09',
                'jenis_ukt' => 1,
            ],
            [
                'tempat' => 'Bumi Perkemahan Cadika HM. Yasin Limpo',
                'alamat' => 'Bajeng, Kab. Gowa',
                'tgl_awal' => '2022-07-08',
                'tgl_akhir' => '2022-07-09',
                'jenis_ukt' => 1,
            ],
        ];

        foreach ($ukt as $key => $value) {
            Ukt::create($value);
        }
    }
}
