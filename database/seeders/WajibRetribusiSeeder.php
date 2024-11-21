<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WajibRetribusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wajib_retribusi')->insert([
            [
                'id' => 1,
                'id_user' => 2,
                'nama' => 'daffa zianur Rahman',
                'no_hp' => '58326342',
                'nik' => '3201010101010101',
                'alamat' => 'kuningan',
                'id_kelurahan' => 5,
                'status' => 'A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
