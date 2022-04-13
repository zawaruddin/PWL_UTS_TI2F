<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Facades\DB;

class KodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode = [
            ['kode_barang' => '01 Buku',],
            ['kode_barang' => '02 Tas',],
            ['kode_barang' => '03 Buku',],
            ['kode_barang' => '04 Pensil',],
            ['kode_barang' => '05 Pengaris',],
            ['kode_barang' => '06 Penghapus',],
            ['kode_barang' => '07 Jangka',],
            ['kode_barang' => '08 Gunting',],
            ['kode_barang' => '09 Lem',],
            ['kode_barang' => '10 Karton',],
        ]

        DB::table('kode')->insert($kode);
    }
}
