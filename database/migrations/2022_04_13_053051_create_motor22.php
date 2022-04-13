<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotor22 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motor22', function (Blueprint $table) {
            $table->bigInteger('id_motor')->autoIncrement();
            $table->string('nama_motor', 100);
            $table->string('merk_motor', 100);
            $table->string('transmisi', 100);
            $table->string('warna_motor');
            $table->double('harga');
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
        Schema::dropIfExists('motor22');
    }
}
