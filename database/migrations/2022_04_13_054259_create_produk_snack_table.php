<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukSnackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_snack', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->string('merk', 30);
            $table->string('jenis', 20);
            $table->integer('berat');
            $table->integer('harga');
            $table->date('expired_date');
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
        Schema::dropIfExists('produk_snack');
    }
}
