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
    ];

    protected $table = 'hasil_sempro';
}
