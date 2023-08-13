<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class revisi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nip_penguji',
        'judul',
        'link_demo',
        'poin_revisi',
        'feedback',
        'status',
    ];

    protected $table = 'revisi';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, "nim", "nim");
    }

    public function penguji()
    {
        return $this->belongsTo(Dosen::class, "nip_penguji", "nip");
    }
}


