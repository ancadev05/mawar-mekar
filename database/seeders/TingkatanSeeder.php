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
                'melati' => '1.png',
            ],
            [
                'tingkat' => 'Siswa Satu',
                'singkatan' => 'MC1',
                'melati' => '2.png',
            ],
            [
                'tingkat' => 'Siswa Dua',
                'singkatan' => 'MC2',
                'melati' => '3.png',
            ],
            [
                'tingkat' => 'Siswa Tiga',
                'singkatan' => 'MC3',
                'melati' => '4.png',
            ],
            [
                'tingkat' => 'Siswa Empat',
                'singkatan' => 'MC4',
                'melati' => '5.png',
            ],
            [
                'tingkat' => 'Kader Dasar',
                'singkatan' => 'K.Da.',
                'melati' => '6.png',
            ],
            [
                'tingkat' => 'Kader Muda',
                'singkatan' => 'K.Ma.',
                'melati' => '7.png',
            ],
            [
                'tingkat' => 'Kader Madya',
                'singkatan' => 'K.Mdy.',
                'melati' => '8.png',
            ],
            [
                'tingkat' => 'Kader Kepala',
                'singkatan' => 'K.Ka.',
                'melati' => '9.png',
            ],
            [
                'tingkat' => 'Kader Utama',
                'singkatan' => 'K.Ua.',
                'melati' => '10.png',
            ],
            [
                'tingkat' => 'Pendekar Muda',
                'singkatan' => 'P.Ma.',
                'melati' => '11.png',
            ],
            [
                'tingkat' => 'Pendekar Madya',
                'singkatan' => 'P.Mdy.',
                'melati' => '12.png',
            ],
            [
                'tingkat' => 'Pendekar Kepala',
                'singkatan' => 'P.Ka.',
                'melati' => '13.png',
            ],
            [
                'tingkat' => 'Pendekar Utama',
                'singkatan' => 'P.Ua.',
                'melati' => '14.png',
            ],
            [
                'tingkat' => 'Pendekar Besar',
                'singkatan' => 'P.Br.',
                'melati' => '15.png',
            ],
        ];

        foreach ($tingkats as $key => $value) {
            Tingkatan::create($value);
        }
    }
}
