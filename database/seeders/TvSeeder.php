<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'merk' => 'LG',
                'jenis' => 'Smart TV',
                'ukuran' => '43 inch',
                'warna' => 'Hitam',
                'harga' => '6.250.000',
                'gambar' => 'style\img\smart_tv_lg_43.jpg'
            ],
            [
                'merk' => 'LG',
                'jenis' => 'TV LED',
                'ukuran' => '32 inch',
                'warna' => 'Hitam',
                'harga' => '4.500.000',
                'gambar' => 'style\img\tv_led_lg_32.jpg'
            ],
            [
                'merk' => 'Polytron',
                'jenis' => 'TV Tabung',
                'ukuran' => '32 inch',
                'warna' => 'Hitam',
                'harga' => '2.100.000',
                'gambar' => 'style\img\tabung_polytron_32.jpg'
            ],
            [
                'merk' => 'Polytron',
                'jenis' => 'Plasma TV',
                'ukuran' => '32 inch',
                'warna' => 'Hitam',
                'harga' => '3.700.000',
                'gambar' => 'style\img\plasma_panasonic_32.jpg'
            ],
        ];
        DB::table('tv')->insert($data);
    }
}