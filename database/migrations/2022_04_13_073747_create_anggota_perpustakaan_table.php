<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaPerpustakaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_perpustakaans', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->string('nama_anggota', 100);
            $table->string('nomor_telepon', 13);
            $table->string('alamat', 255);
            $table->string('jenis_kelamin', 20);
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
        Schema::dropIfExists('anggota_perpustakaans');
    }
}
