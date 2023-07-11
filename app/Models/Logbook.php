<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logbook extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan',
        'feedback',
        'status',
        'dokumentasi',
        'media',
    ];

    protected $table = 'logbook';
}
