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
        Schema::create('point_pelanggarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_santri');
            $table->string('jenis_pelanggaran');
            $table->integer('point');
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('id_santri')->references('id_santri')->on('santris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('point_pelanggarans');
    }
};
