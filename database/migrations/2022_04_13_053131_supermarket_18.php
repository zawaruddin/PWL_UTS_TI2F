<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Supermarket18 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supermarket', function (Blueprint $table) {
            $table->id();
            $table->string('nama_brg', 30);
            $table->string('merk_brg', 30);
            $table->string('kode_brg', 15)->index();
            $table->string('harga_brg', 20);
            $table->string('stok_brg', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supermarket');
    }
}
