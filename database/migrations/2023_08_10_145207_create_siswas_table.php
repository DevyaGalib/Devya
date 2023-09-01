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
        Schema::create('siswa', function (Blueprint $table) {
            $table->increments('id_siswa');
            $table->integer('id_user');
            $table->text('alamat_siswa');
            $table->string('jenis_kelamin_siswa');
            $table->string('no_hp_siswa', 15);
            $table->string('agama_siswa');
            $table->string('tempat_lahir_siswa');
            $table->date('tanggal_lahir_siswa');
            $table->string('nama_ayah_siswa');
            $table->string('pekerjaan_ayah_siswa');
            $table->float('penghasilan_ayah_siswa');
            $table->string('nama_ibu_siswa');
            $table->string('pekerjaan_ibu_siswa');
            $table->float('penghasilan_ibu_siswa');
            $table->string('nama_sekolah_siswa');
            $table->string('nisn_sekolah_siswa');
            $table->string('nik_siswa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
