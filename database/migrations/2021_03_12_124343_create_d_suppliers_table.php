<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_suppliers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logo');
            $table->string('nama_perusahaan');
            $table->text('alamat');
            $table->string('telepon');
            $table->string('persediaan');
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
        Schema::dropIfExists('d_suppliers');
    }
}
