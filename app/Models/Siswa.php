<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';
    protected $fillable = [
    'id_user',
    'alamat_siswa',
    'jenis_kelamin_siswa',
    'no_hp_siswa',
    'agama_siswa',
    'tempat_lahir_siswa',
    'tanggal_lahir_siswa',
    'nama_ayah_siswa',
    'pekerjaan_ayah_siswa',
    'penghasilan_ayah_siswa',
    'nama_ibu_siswa',
    'pekerjaan_ibu_siswa',
    'penghasilan_ibu_siswa',
    'nama_sekolah_siswa',
    'nisn_sekolah_siswa',
    'nik_siswa',
    ];
}
