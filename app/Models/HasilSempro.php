<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSempro extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'pengajuan_sempro_id',
        'file_f3',
        'keterangan',
    ];

    protected $table = 'hasil_sempro';

    function pengajuanSempro()
    {
        return $this->belongsTo(PengajuanSempro::class, 'pengajuan_sempro_id', 'id');
    }
}
