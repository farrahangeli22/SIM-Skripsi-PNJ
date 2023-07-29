<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'judul',
        'sub_judul',
        'anggota',
        'jadwal_sempro',
        'file_f1',
        'file_f2',
        'dosen_penguji1',
        'dosen_penguji2',
        'dosen_penguji3',
        'ruang',
    ];

    protected $table = 'pengajuan_sempro';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }

    public function hasilSempro()
    {
        return $this->hasOne(HasilSempro::class);
    }

    public function dosenPenguji1()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji1", "nip");
    }

    public function dosenPenguji2()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji2", "nip");
    }

    public function dosenPenguji3()
    {
        return $this->belongsTo(Dosen::class, "dosen_penguji3", "nip");
    }
}
