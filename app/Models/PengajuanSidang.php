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
        'jadwal_sidang',
        'status',
        'file_f4',
        'file_f6',
    ];

    protected $table = 'pengajuan_sidang';
}
