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
        Schema::create('statistik_wargas', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_warga')->nullable();
            $table->integer('jumlah_laki_laki')->nullable();
            $table->integer('jumlah_perempuan')->nullable();
            $table->integer('jumlah_kk')->nullable();
            $table->integer('anak')->nullable();
            $table->integer('penerima_bansos')->nullable();
            $table->integer('umkm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_wargas');
    }
};
