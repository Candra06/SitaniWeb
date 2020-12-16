<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekomendasiPupuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekomendasi_pupuk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_penyakit')->unsigned();
            $table->integer('id_pupuk')->unsigned();
            $table->text('aturan_pakai');
            $table->timestamps();
            $table->foreign('id_penyakit')->references('id')->on('penyakit');
            $table->foreign('id_pupuk')->references('id')->on('pupuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekomendasi_pupuk');
    }
}
