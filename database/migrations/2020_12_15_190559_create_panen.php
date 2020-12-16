<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_lahan')->unsigned();
            $table->date('tanggal_panen');
            $table->integer('hasil');
            $table->timestamps();
            $table->foreign('id_lahan')->references('id')->on('lahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('panen');
    }
}
