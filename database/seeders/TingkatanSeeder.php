<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tingkat = [
            [
                'tingkat' => 'Siswa Dasar',
                'singkatan' => '-',
                'melati' => '-',
            ],
            [
                'tingkat' => 'Siswa Satu',
                'singkatan' => 'MC1',
                'melati' => 'm1',
            ],
            [
                'tingkat' => 'Siswa Dua',
                'singkatan' => 'MC2',
                'melati' => 'm2',
            ],
            [
                'tingkat' => 'Siswa Tiga',
                'singkatan' => 'MC3',
                'melati' => 'm3',
            ],
            [
                'tingkat' => 'Siswa Empat',
                'singkatan' => 'MC4',
                'melati' => 'm4',
            ],
            [
                'tingkat' => 'Kader Dasar',
                'singkatan' => 'K.Da.',
                'melati' => '-',
            ],
            [
                'tingkat' => 'Kader Muda',
                'singkatan' => 'K.Ma.',
                'melati' => 'k1',
            ],
            [
                'tingkat' => 'Kader Madya',
                'singkatan' => 'K.Mdy.',
                'melati' => 'k2',
            ],
            [
                'tingkat' => 'Kader Kepala',
                'singkatan' => 'K.Ka.',
                'melati' => 'k3',
            ],
            [
                'tingkat' => 'Kader Utama',
                'singkatan' => 'K.Ua.',
                'melati' => 'k4',
            ],
            [
                'tingkat' => 'Pendekar Muda',
                'singkatan' => 'P.Ma.',
                'melati' => 'p1',
            ],
            [
                'tingkat' => 'Pendekar Madya',
                'singkatan' => 'P.Mdy.',
                'melati' => 'p2',
            ],
            [
                'tingkat' => 'Pendekar Kepala',
                'singkatan' => 'P.Ka.',
                'melati' => 'p3',
            ],
            [
                'tingkat' => 'Pendekar Utama',
                'singkatan' => 'P.Ua.',
                'melati' => 'p4',
            ],
            [
                'tingkat' => 'Pendekar Besar',
                'singkatan' => 'P.Br.',
                'melati' => 'p5',
            ],
        ];
    }
}
