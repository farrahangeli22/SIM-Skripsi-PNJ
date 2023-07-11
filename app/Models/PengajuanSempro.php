<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanSempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'sub_judul',
        'jadwal_sempro',
        'status',
        'file_f1',
        'file_f2',
    ];

    protected $table = 'pengajuan_sempro';
}
