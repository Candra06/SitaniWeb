<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGejala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_gejala', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penyakit')->unsigned();
            $table->string('nama_gejala', 50);
            $table->timestamps();
            $table->foreign('id_penyakit')->references('id')->on('penyakit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_gejala');
    }
}
