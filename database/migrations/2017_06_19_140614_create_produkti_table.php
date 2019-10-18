<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduktiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produkti', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_kategorija');
            $table->string('ime');
            $table->string('slika');
            $table->string('opis');
            $table->string('cena');
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
        Schema::dropIfExists('produkti');
    }
}
