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
        Schema::create('reviewer', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->dateTime('tanggalAwalLuang');
            $table->dateTime('tanggalAkhirLuang');
            $table->time('waktuAwal');
            $table->time('waktuAkhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviewer');
    }
};
