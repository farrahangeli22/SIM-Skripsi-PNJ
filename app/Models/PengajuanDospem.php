<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanDospem extends Model
{
    use HasFactory;

    protected $fillable = [
        'pengajuan_judul_id',
        'nip_dospem',
        'status',
    ];

    protected $table = 'pengajuan_dospem';
}
