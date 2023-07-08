<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanDospem extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
    ];

    protected $table = 'pengajuan_dospem';
}
