<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LemariEs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('lemari_es', function (Blueprint $table) {
            $table->id('id_lemaries');
            $table->string('merek');
            $table->string('jumlah_pintu');
            $table->string('berat');
            $table->string('warna');
            $table->string('harga');
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
        Schema::dropIfExists('lemari_es');
    }
}
