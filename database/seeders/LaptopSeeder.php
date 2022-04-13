<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('laptop')->insert(
            [
                [
                    'merk' => 'Lenovo IdeaPad Slim 3',
                    'harga' => 6299000,
                    'processor' => 'Intel Core i3',
                    'ram' => '4 GB',
                    'penyimpanan' => '256 GB',
                    'os' => 'Windows 10'
                ],
                [
                    'merk' => 'Acer Aspire 3 A314-32',
                    'harga' => 4400000,
                    'processor' => 'Intel Core 2 Duo',
                    'ram' => '4 GB',
                    'penyimpanan' => '256 GB',
                    'os' => 'Windows 10'
                ],
                [
                    'merk' => 'Apple Macbook Air M1',
                    'harga' => 14849000,
                    'processor' => 'Apple M1',
                    'ram' => '8 GB',
                    'penyimpanan' => '256 GB',
                    'os' => 'macOS'
                ],
                [
                    'merk' => 'ASUS VivoBook 14 A412FA',
                    'harga' => 6449000,
                    'processor' => 'Intel Pentium Gold 5405U',
                    'ram' => '4 GB',
                    'penyimpanan' => '1000 GB',
                    'os' => 'Windows 10'
                ],
                [
                    'merk' => 'Samsung Chromebook 4',
                    'harga' => 5384000,
                    'processor' => 'Processor N4020',
                    'ram' => '4 GB',
                    'penyimpanan' => '32 GB',
                    'os' => 'Chrome OS'
                ],
            ]);
    }
}
