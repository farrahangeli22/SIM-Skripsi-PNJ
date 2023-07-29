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
        Schema::create('hasil_sempro', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_sempro_id');
            $table->foreign('pengajuan_sempro_id')->references('id')->on('pengajuan_sempro');
            $table->string('status');
            $table->text('file_f3');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_sempro');
    }
};
