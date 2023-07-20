<?php

namespace Database\Seeders;

use App\Models\Status;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'nama' => 'pengajuan judul',
        ]);

        Status::create([
            'nama' => 'pengajuan sempro',
        ]);

        Status::create([
            'nama' => 'lulus sempro',
        ]);

        Status::create([
            'nama' => 'tidak lulus sempro',
        ]);

        Status::create([
            'nama' => 'pengajuan sidang',
        ]);

        Status::create([
            'nama' => 'lulus sidang',
        ]);

        Status::create([
            'nama' => 'tidak lulus sidang',
        ]);

        Status::create([
            'nama' => 'penyerahan alat',
        ]);
    }
}
