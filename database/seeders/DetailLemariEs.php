<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DetailLemariEs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lemari_es')->insert(
            [
                [
                    'merek' => 'UltimateTaste',
                    'jumlah_pintu' => '2',
                    'berat' => '83',
                    'warna' => 'merah',
                    'harga' => '1.000.000',
                ],
                [
                    'merek' => 'UltimateGood',
                    'jumlah_pintu' => '2',
                    'berat' => '83',
                    'warna' => 'merah',
                    'harga' => '1.000.000',
                ],
                [
                    'merek' => 'UltimateAmazing',
                    'jumlah_pintu' => '2',
                    'berat' => '83',
                    'warna' => 'merah',
                    'harga' => '1.000.000',
                ],

        ]);
    }
}
