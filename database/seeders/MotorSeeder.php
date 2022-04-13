<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor = [
            [
                'nama_motor' => 'Beat',
                'merk_motor' => 'Honda',
                'transmisi' => 'Matic',
                'warna_motor' => 'hitam',
                'harga' => 16000000
            ],
        ];
        DB::table('motor22')->insert($motor);
    }
}
