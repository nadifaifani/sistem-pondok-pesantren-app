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
        Schema::create('mata_pelajarans', function (Blueprint $table) {
            $table->id('id_mata_pelajaran');
            $table->unsignedBigInteger('id_nilai')->nullable();
            $table->string('fiqih');
            $table->string('hadist');
            $table->string('bahasa_arab');
            $table->string('nahwu');
            $table->string('shorof');
            $table->string('hafalan');
            $table->timestamps();

            $table->foreign('id_nilai')->references('id_nilai')->on('nilai_santris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mata_pelajarans');
    }
};
