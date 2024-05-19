<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id('id_pemasukan');
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->integer('jumlah_pemasukan');
            $table->dateTime('tanggal_pemasukan');
            $table->string('deskripsi_pemasukan');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukans');
    }
};
