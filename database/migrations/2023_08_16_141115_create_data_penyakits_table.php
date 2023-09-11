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
        Schema::create('data_penyakits', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->unique();
            $table->text('solusi')->nullable();
            $table->string('lokasi_tubuh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_penyakits');
    }
};
