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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id(); // Primary key, ID unik untuk setiap transaksi
            $table->unsignedBigInteger('id_konsultasi'); // Foreign key untuk merujuk pada konsultasi terkait
            $table->enum('status', ['berhasil', 'gagal']); // Status transaksi
            $table->decimal('total_biaya', 10, 2); // Total biaya transaksi
            $table->string('metode_pembayaran', 50); // Metode pembayaran yang digunakan

            // Menambahkan foreign key constraint untuk id_konsultasi
            $table->foreign('id_konsultasi')->references('id')->on('konsultasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
