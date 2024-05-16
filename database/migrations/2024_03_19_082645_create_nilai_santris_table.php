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
        Schema::create('nilai_santris', function (Blueprint $table) {
            $table->id('id_nilai');
            $table->unsignedBigInteger('id_santri')->nullable();
            $table->string('semester');
            $table->string('fiqih');
            $table->string('hadist');   
            $table->string('bahasa_arab');
            $table->string('nahwu');   
            $table->string('shorof');
            $table->string('hafalan');   
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
        Schema::dropIfExists('nilai_santris');
    }
};
