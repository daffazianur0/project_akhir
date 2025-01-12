<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kapalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_jenis_kapal')->insert([
            ['jenis_kapal' => 'kapal laut', 'biaya_retribusi' => '100000'],
            ['jenis_kapal' => 'kapal feri', 'biaya_retribusi' => '5000000'],
            ['jenis_kapal' => 'kapal tengker', 'biaya_retribusi' => '7000000'],
            ['jenis_kapal' => 'kapal pesiar', 'biaya_retribusi' => '8000000'],
        ]);
    }
    }

