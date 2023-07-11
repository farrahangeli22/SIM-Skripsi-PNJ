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
        Schema::create('hasil_sidang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengajuan_sidang_id');
            $table->foreign('pengajuan_sidang_id')->references('id')->on('pengajuan_sidang');
            $table->string('status');
            $table->text('file_f5');
            $table->text('file_f7');
            $table->text('file_f8');
            $table->text('file_f9');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_sidang');
    }
};
