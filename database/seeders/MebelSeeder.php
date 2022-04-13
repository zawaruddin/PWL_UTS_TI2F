<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MebelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mebel = [
            [
                'kode' => '1111111111',
                'nama' => 'meja',
                'jenis' => 'kayu',
                'harga' => '1500000',
            ],
            [
                'kode' => '2222222222',
                'nama' => 'kursi',
                'jenis' => 'kayu',
                'harga' => '500000',
            ],
            [
                'kode' => '3333333333',
                'nama' => 'rak',
                'jenis' => 'alumunium',
                'harga' => '750000',
            ],
            [
                'kode' => '4444444444',
                'nama' => 'meja',
                'jenis' => 'kaca',
                'harga' => '1000000',
            ],
        ];

        DB::table('mebel')->insert($mebel);
    }
}
