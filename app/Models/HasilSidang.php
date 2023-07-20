<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilSidang extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'pengajuan_sidang_id',
        'file_f5',
        'file_f7',
        'file_f8',
        'file_f9',
    ];

    protected $table = 'hasil_sidang';

    function pengajuanSidang()
    {
        return $this->belongsTo(PengajuanSidang::class, 'pengajuan_sidang_id', 'id');
    }
}
