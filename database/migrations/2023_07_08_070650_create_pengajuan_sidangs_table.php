<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan_sidang', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->foreign('nim')->references('nim')->on('mahasiswa');
            $table->string('judul');
            $table->string('sub_judul')->nullable();
            $table->string('anggota')->nullable();
            $table->dateTime('jadwal_sidang')->nullable();
            $table->string('ruang')->nullable();
            $table->string('status')->nullable();
            $table->integer('nilai')->nullable();
            $table->text('keterangan')->nullable();
            $table->text('file_f4');
            $table->text('file_f6')->nullable();
            $table->string('dosen_penguji1')->nullable();
            $table->string('dosen_penguji2')->nullable();
            $table->string('dosen_penguji3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_sidang');
    }
};
