<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cabai')->unsigned();
            $table->integer('id_petani')->unsigned();
            $table->string('nama_lahan', 20);
            $table->string('luas', 10);
            $table->date('tanggal_tanam');
            $table->enum('status', ['Produktif', 'Nonproduktif']);
            $table->timestamps();
            $table->foreign('id_cabai')->references('id')->on('cabai');
            $table->foreign('id_petani')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahan');
    }
}
