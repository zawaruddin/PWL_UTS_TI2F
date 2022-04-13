<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan_umums', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->integer('roda');
            $table->string('nomor', 50);
            $table->string('jenis', 50);
            $table->string('tahun', 50);
            $table->string('merk', 50);
            $table->string('muatan', 50);
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
        Schema::dropIfExists('kendaraan_umums');
    }
}
