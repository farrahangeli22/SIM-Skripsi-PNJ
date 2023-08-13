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
            $table->integer('nilai_pembimbing')->nullable();
            $table->integer('nilai_penguji1')->nullable();
            $table->integer('nilai_penguji2')->nullable();
            $table->integer('nilai_penguji3')->nullable();
            $table->string('status')->nullable();
            $table->integer('nilai')->nullable();
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
