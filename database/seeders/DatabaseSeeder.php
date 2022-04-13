<?php

namespace Database\Seeders;

use App\Models\AksesorisPakaian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AksesorisPakaianSeeder::class);
    }
}
