<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_pegawais', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto');
            $table->string('id_pegawai');
            $table->text('nama');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('divisi');
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
        Schema::dropIfExists('d_pegawais');
    }
}
