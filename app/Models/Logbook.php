<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'rincian_kegiatan',
        'rencana_pencapaian',
        'feedback',
        'status',
        'dokumentasi',
        'media',
    ];

    protected $table = 'logbook';
}
