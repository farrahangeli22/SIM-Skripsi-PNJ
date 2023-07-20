<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'judul',
        'sub_judul',
        'anggota',
        'jadwal_sidang',
        'status',
        'file_f4',
        'file_f6',
        'dosen_penguji1',
        'dosen_penguji2',
        'dosen_penguji3',
    ];

    protected $table = 'pengajuan_sidang';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }
    public function hasilSidang()
    {
        return $this->hasOne(HasilSidang::class);
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
