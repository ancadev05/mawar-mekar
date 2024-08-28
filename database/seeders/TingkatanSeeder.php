<?php

namespace Database\Seeders;

use App\Models\Tingkatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tingkats = [
            [
                'tingkat' => 'Siswa Dasar',
                'singkatan' => 'Siswa Dasar',
                'melati' => 's.png',
            ],
            [
                'tingkat' => 'Siswa Satu',
                'singkatan' => 'MC1',
                'melati' => 's1.png',
            ],
            [
                'tingkat' => 'Siswa Dua',
                'singkatan' => 'MC2',
                'melati' => 's2.png',
            ],
            [
                'tingkat' => 'Siswa Tiga',
                'singkatan' => 'MC3',
                'melati' => 's3.png',
            ],
            [
                'tingkat' => 'Siswa Empat',
                'singkatan' => 'MC4',
                'melati' => 's4.png',
            ],
            [
                'tingkat' => 'Kader Dasar',
                'singkatan' => 'K.Da.',
                'melati' => 'k.png',
            ],
            [
                'tingkat' => 'Kader Muda',
                'singkatan' => 'K.Ma.',
                'melati' => 'k1.png',
            ],
            [
                'tingkat' => 'Kader Madya',
                'singkatan' => 'K.Mdy.',
                'melati' => 'k2.png',
            ],
            [
                'tingkat' => 'Kader Kepala',
                'singkatan' => 'K.Ka.',
                'melati' => 'k3.png',
            ],
            [
                'tingkat' => 'Kader Utama',
                'singkatan' => 'K.Ua.',
                'melati' => 'k4.png',
            ],
            [
                'tingkat' => 'Pendekar Muda',
                'singkatan' => 'P.Ma.',
                'melati' => 'p1.png',
            ],
            [
                'tingkat' => 'Pendekar Madya',
                'singkatan' => 'P.Mdy.',
                'melati' => 'p2.png',
            ],
            [
                'tingkat' => 'Pendekar Kepala',
                'singkatan' => 'P.Ka.',
                'melati' => 'p3.png',
            ],
            [
                'tingkat' => 'Pendekar Utama',
                'singkatan' => 'P.Ua.',
                'melati' => 'p4.png',
            ],
            [
                'tingkat' => 'Pendekar Besar',
                'singkatan' => 'P.Br.',
                'melati' => 'p5.png',
            ],
        ];

        foreach ($tingkats as $key => $value) {
            Tingkatan::create($value);
        }
    }
}
