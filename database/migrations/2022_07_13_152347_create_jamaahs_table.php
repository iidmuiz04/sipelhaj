<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJamaahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaahs', function (Blueprint $table) {
            $table->id('id_jamaah');
            $table->dateTime('tgl_daftar');
            $table->string('nama_lengkap', 50);
            $table->string('tgl_lahir', 50);
            $table->text('alamat', 100);
            $table->string('no_telp', 15);
            $table->string('keterangan', 50);
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
        Schema::dropIfExists('jamaahs');
    }
}
