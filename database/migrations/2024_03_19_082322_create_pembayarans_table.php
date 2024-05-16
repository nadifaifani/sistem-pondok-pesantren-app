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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->unsignedBigInteger('id_santri')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->dateTime('tanggal_pembayaran');
            $table->integer('jumlah_pembayaran');
            $table->string('jenis_pembayaran');
            $table->string('status_pembayaran');
            $table->timestamps();  

            $table->foreign('id_santri')->references('id_santri')->on('santris');
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
        Schema::dropIfExists('pembayarans');
    }
};
