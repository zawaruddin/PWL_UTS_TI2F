<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesinCuci extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesin_cuci')->insert([
            [
                'nama' => 'Wazir',
                'totalcucian' => '4',
                'deskripsi' => 'Celana Panjang dan Kaos',
            ],
            [
                'nama' => 'Afay',
                'totalcucian' => '8',
                'deskripsi' => 'Celana Pendek dan Kaos',
            ],
            [
                'nama' => 'Qorni',
                'totalcucian' => '6',
                'deskripsi' => 'Celana Panjang dan Kaos',
            ]
        ]
        );
    }
}
