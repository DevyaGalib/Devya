<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BerkasSiswa extends Model
{
    use HasFactory;
    protected $table = 'berkas_siswa';
    protected $primaryKey = 'id_berkas_siswa';
    protected $fillable = [
        'id_user',
        'kk_berkas_siswa',
        'akta_berkas_siswa',
        'ktp_berkas_siswa',
    ];
}
