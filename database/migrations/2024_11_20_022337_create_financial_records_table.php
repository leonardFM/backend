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
        Schema::create('financial_records', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->string('tahun');
            $table->decimal('terkumpul', 15, 2)->default(0); // Total funds collected
            $table->decimal('pengeluaran', 15, 2)->default(0); // Total expenditures
            $table->decimal('gaji_keamanan', 15, 2)->default(0); // Security salary
            $table->decimal('biaya_sampah', 15, 2)->default(0); // Waste cost
            $table->decimal('listrik', 15, 2)->default(0); // Electricity cost
            $table->decimal('konsumsi', 15, 2)->default(0); // Consumption
            $table->decimal('belanja_alat', 15, 2)->default(0); // Equipment purchases
            $table->decimal('tenaga_kerja', 15, 2)->default(0); // Labor cost
            $table->decimal('kasbon_keamanan', 15, 2)->default(0); // Security cash advance
            $table->decimal('dana_sosial', 15, 2)->default(0); // Social funds
            $table->decimal('pengembalian', 15, 2)->default(0); // Return funds
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_records');
    }
};
