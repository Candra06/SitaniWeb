<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyakit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyakit', function (Blueprint $table) {
            $table->increments('id', 3);
            $table->string('nama', 30);
            $table->text('ciri_ciri');
            $table->text('penanggulangan');
            $table->text('pencegahan');
            $table->string('gambar', 30);
            $table->enum('jenis', ['Penyakit', 'Hama']);
            $table->enum('status', ['Show', 'Hidden']);
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
        Schema::dropIfExists('penyakit');
    }
}
