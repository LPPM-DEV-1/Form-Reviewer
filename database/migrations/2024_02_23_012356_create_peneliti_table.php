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
        Schema::create('peneliti', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->unsignedBigInteger('reviewer_id')->nullable();
            $table->foreign('reviewer_id')->references('id')->on('reviewer')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peneliti');
    }
};
