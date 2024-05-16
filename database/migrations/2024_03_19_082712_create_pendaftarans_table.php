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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id('id_pendaftar');
            $table->string('nama_pendaftar');
            $table->string('tempat_tanggal_lahir_pendaftar');
            $table->string('jenis_kelamin_santri'); 
            $table->string('alamat_pendaftar');  
            $table->string('no_hp_pendaftar');
            $table->string('email_pendaftar')->unique();
            $table->string('status_pendaftar');
            $table->string('nama_wali_pendaftar');
            $table->string('email_wali_pendaftar')->unique();
            $table->string('ktp_santri');
            $table->string('kk_santri');
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
        Schema::dropIfExists('pendaftarans');
    }
};
