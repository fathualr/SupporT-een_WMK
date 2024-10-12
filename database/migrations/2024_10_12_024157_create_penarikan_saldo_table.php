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
        Schema::create('penarikan_saldo', function (Blueprint $table) {
            $table->id(); // Primary key, ID unik untuk setiap penarikan saldo
            $table->unsignedBigInteger('id_user'); // Foreign key untuk merujuk pada pengguna
            $table->enum('status', ['berhasil', 'gagal']); // Status penarikan
            $table->decimal('jumlah', 10, 2); // Jumlah saldo yang ditarik
            $table->string('tujuan_penarikan', 100); // Tujuan atau alasan penarikan saldo
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at

            // Menambahkan foreign key constraint untuk id_user
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penarikan_saldo');
    }
};
