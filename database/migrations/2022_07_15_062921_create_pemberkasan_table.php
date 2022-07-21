<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemberkasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemberkasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('kk');
            $table->string('akta_kelahiran');
            $table->string('ktp');
            $table->string('foto_a');
            $table->string('foto_b');
            $table->string('foto_c');
            $table->string('btl_norek');
            $table->string('btl_nominal');
            $table->string('domisili');
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
        Schema::dropIfExists('pemberkasan');
    }
}
