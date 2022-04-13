<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElektronikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elektronik', function (Blueprint $table) {
            $table->id();
            $table->string ('nama', 50);
            $table->string ('merek', 35);
            $table->integer ('harga');
            $table->string ('suplier', 35);
            $table->string ('tanggal_beli', 50);
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
        Schema::dropIfExists('elektronik');
    }
}
