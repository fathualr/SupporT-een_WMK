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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id(); // Primary key, ID unik untuk setiap subscription
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi dengan tabel users, hapus subscription jika user dihapus
            $table->integer('duration'); // Durasi subscription dalam hari (bisa diambil dari subscription_plan_id)
            $table->date('started_at'); // Tanggal mulai subscription
            $table->date('ends_at'); // Tanggal berakhir subscription (hasil dari perhitungan)
            $table->timestamps(); // Timestamps created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
