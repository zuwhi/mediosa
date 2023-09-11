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
        Schema::create('riwayat_pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_pasien_id')->constrained('data_pasiens');
            $table->foreignId('data_penyakit_id')->constrained('data_penyakits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pasiens');
    }
};
