<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePupuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pupuk', function (Blueprint $table) {
            $table->increments('id', 3);
            $table->string('nama_pupuk', 30);
            $table->text('deskripsi');
            $table->text('kandungan');
            $table->text('aturan_pakai');
            $table->string('gambar', 30);
            $table->string('harga', 6);
            $table->enum('type', ['Pupuk', 'Pestisida']);
            $table->enum('jenis', ['Organik', 'Kimis']);
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
        Schema::dropIfExists('pupuk');
    }
}
