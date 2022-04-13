<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AksesorisPakaianSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aksesoris_pakaians')->insert([
            [
                "nama" => "Ikat Pinggang",
                "warna" => "Cokelat",
                "desc" => "Ini adalah ikat pinggang",
                "harga" => 20000
            ],
            [
                "nama" => "Topi",
                "warna" => "Merah",
                "desc" => "Ini adalah topi",
                "harga" => 10000
            ],
        ]);
    }
}
