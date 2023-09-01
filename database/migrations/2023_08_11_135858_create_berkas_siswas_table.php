<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('berkas_siswa', function (Blueprint $table) {
            $table->increments('id_berkas_siswa');
            $table->integer('id_user');
            $table->string('kk_berkas_siswa');
            $table->string('akta_berkas_siswa');
            $table->string('ktp_berkas_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_siswa');
    }
};
