<?php

namespace Database\Seeders;

use App\Models\Cabang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cabangs = [
            [
                'no_cabang' => '01',
                'cabang' => 'Sungguminasa',
            ],
            [
                'no_cabang' => '02',
                'cabang' => 'Limbung',
            ],
            [
                'no_cabang' => '03',
                'cabang' => 'Malino',
            ],
            [
                'no_cabang' => '04',
                'cabang' => 'Pao Tombolo',
            ],
            [
                'no_cabang' => '05',
                'cabang' => 'Pallangga',
            ],
            [
                'no_cabang' => '06',
                'cabang' => 'Parangloe',
            ],
            [
                'no_cabang' => '07',
                'cabang' => 'Pattallassang',
            ],
            [
                'no_cabang' => '08',
                'cabang' => 'Ponpes Sultan Hasanuddin',
            ],
            [
                'no_cabang' => '09',
                'cabang' => 'Bungaya',
            ],
            [
                'no_cabang' => '10',
                'cabang' => 'Biring Bulu',
            ],
            [
                'no_cabang' => '11',
                'cabang' => 'Tompo Bulu',
            ],
            [
                'no_cabang' => '99',
                'cabang' => 'Cabang Lainnya',
            ],
        ];

        foreach ($cabangs as $key => $value) {
            Cabang::create($value);
        }
    }
}
