<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AksesorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aksesoris = [
            [
                'kode_barang' => 'AS001',
                'nama' => 'Kalung Mutiara',
                'harga' => 250000,
                'stok' => 30,
            ],
            [
                'kode_barang' => 'AS002',
                'nama' => 'Topi Baseball',
                'harga' => 30000,
                'stok' => 45,
            ],
            [
                'kode_barang' => 'AS003',
                'nama' => 'Dasi Kupu-Kupu',
                'harga' => 17000,
                'stok' => 100,
            ],
            [
                'kode_barang' => 'AS004',
                'nama' => 'Ikat Pinggang Gesper',
                'harga' => 35000,
                'stok' => 45,
            ],
            [
                'kode_barang' => 'AS005',
                'nama' => 'Bando Mickey Mouse',
                'harga' => 20000,
                'stok' => 66,
            ],
            [
                'kode_barang' => 'AS006',
                'nama' => 'Bros Bunga',
                'harga' => 18000,
                'stok' => 57,
            ],
            [
                'kode_barang' => 'AS007',
                'nama' => 'Cincin Titanium',
                'harga' => 25000,
                'stok' => 80,
            ],
            [
                'kode_barang' => 'AS008',
                'nama' => 'Anting-Anting Jepit',
                'harga' => 20000,
                'stok' => 50,
            ],
        ];

        DB::table('aksesoris')->insert($aksesoris);
    }
}
