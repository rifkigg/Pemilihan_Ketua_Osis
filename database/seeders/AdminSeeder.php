<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'password' => Hash::make('Rifki Ganteng'),
            'role' => 'admin',
            'nisn' => '19052007',
            'status' => 'Sudah Voting',
            'jenis_kelamin' => 'Laki - Laki'
        ]);

        DB::table('users')->insert([
            'name' => 'siswa',
            'password' => Hash::make('12345678'),
            'role' => 'siswa',
            'nisn' => '12345678',
            'status' => 'Belum Voting',
            'jenis_kelamin' => 'Perempuan'
        ]);
    }
}