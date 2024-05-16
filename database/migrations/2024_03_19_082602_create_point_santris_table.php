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
        Schema::create('point_santris', function (Blueprint $table) {
            $table->id('id_point_santri');
            $table->unsignedBigInteger('id_santri')->nullable();
            $table->string('jenis_pont_santri');
            $table->string('jumlah_point_santri');
            $table->string('deskripsi_point_santri');
            $table->timestamps();

            $table->foreign('id_santri')->references('id_santri')->on('santris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */   
    public function down()
    {
        Schema::dropIfExists('point_santris');
    }
};
