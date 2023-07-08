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
        Schema::create('dosen_penguji_sempro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_sempro_id');
            $table->foreign('pengajuan_sempro_id')->references('id')->on('pengajuan_sempro');
            $table->string('nip')->references('nip')->on('dosen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_penguji_sempro');
    }
};
