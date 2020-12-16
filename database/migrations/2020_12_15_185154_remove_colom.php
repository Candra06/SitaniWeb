<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('penyakit', function (Blueprint $table) {

            $table->renameColumn('ciri_ciri', 'deskripsi');
            $table->renameColumn('penanggulangan', 'penanganan');
            $table->dropColumn('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('penyakit', function (Blueprint $table) {
            //
        });
    }
}
