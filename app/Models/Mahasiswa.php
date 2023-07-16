<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'kelas',
        'email',
    ];
    protected $primaryKey = 'nim';

    function Skripsi()
    {
        return $this->hasOne(Skripsi::class, 'nim', 'nim');
    }
    function dosen()
    {
        return $this->belongsTo(dosen::class, 'nip_dospem', 'nip');
    }


    protected $table = 'mahasiswa';
}
