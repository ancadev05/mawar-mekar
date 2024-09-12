<?php

namespace Database\Seeders;

use App\Models\LevelAkun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelAkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $level_akun = [
            [
                'level' => 'Super-Admin',
            ],
            [
                'level' => 'Admin',
            ],
            [
                'level' => 'Admin-Cabang',
            ],
        ];

        foreach ($level_akun as $key => $value) {
            LevelAkun::create($value);
        }
    }
}
