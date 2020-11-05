<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id', 3);
            $table->string('nama');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->string('kecamatan', 20);
            $table->string('telepon', 13);
            $table->string('username', 13);
            $table->string('password');
            $table->enum('role', ['Admin', 'Petani']);
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
        Schema::dropIfExists('users');
    }
}
