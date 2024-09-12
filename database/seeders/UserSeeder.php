<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name' => "Super Admin",
                'username' => 'admin',
                'password' => 'admin',
                'level_akun_id' => 1,
                'cabang_id' => 12
            ],
            [
                'name' => "Admin Pimda",
                'username' => 'pimda',
                'password' => 'pimda',
                'level_akun_id' => 2,
                'cabang_id' => 12
            ],
            [
                'name' => "Admin cabang",
                'username' => 'cabang',
                'password' => 'cabang',
                'level_akun_id' => 3,
                'cabang_id' => 1
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
