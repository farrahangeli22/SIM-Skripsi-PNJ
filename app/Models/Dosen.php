<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'email',
    ];
    protected $primaryKey = 'nip';
    protected $keyType = "string";

    protected $table = 'dosen';

    public function mahasiswa()
    {
        return $this->hashMany(Mahasiswa::class, 'nip_dospem', 'nip');
    }
}
