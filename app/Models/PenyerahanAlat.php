<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyerahanAlat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'judul',
        'sub_judul',
        'anggota',
        'file_f10',
        'file_f11',
        'file_f12',
        'file_f13',
        'file_f14',
        'file_f15',
        'file_f16',
        'link_video',
        'sertifikat_pkkp',
        'sertifikat_toeic',
        'sertifikat_lomba',
        'sertifikat_kejuaraan',
        'sertifikat_organisasi',
    ];

    protected $table = 'penyerahan_alat';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }

}
