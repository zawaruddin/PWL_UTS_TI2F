<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAksesorisPakaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aksesoris_pakaians', function (Blueprint $table) {
            $table->id();
            $table->string("nama", 50);
            $table->string("warna", 20);
            $table->string("desc", 100);
            $table->integer("harga");
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
        Schema::dropIfExists('aksesoris_pakaians');
    }
}
