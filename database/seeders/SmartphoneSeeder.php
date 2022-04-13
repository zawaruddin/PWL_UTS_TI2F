<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SmartphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hp = [
            [
                'nama' => 'iPhone 13 pro',
                'penyimpanan' => '128gb',
                'stok' => 10,
            ],
            [
                'nama' => 'iPhone 12 pro',
                'penyimpanan' => '256gb',
                'stok' => 15,
            ],
            [
                'nama' => 'iPhone xr',
                'penyimpanan' => '128gb',
                'stok' => 5,
            ],
        ];

        DB::table('smartphone')->insert($hp);
    }
}
