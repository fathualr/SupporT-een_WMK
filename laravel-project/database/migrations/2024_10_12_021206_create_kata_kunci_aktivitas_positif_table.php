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
        Schema::create('kata_kunci_aktivitas_positif', function (Blueprint $table) {
            $table->id(); // Primary key, ID unik untuk setiap kata kunci aktivitas
            $table->unsignedBigInteger('id_aktivitas'); // Foreign key untuk merujuk ke aktivitas terkait
            $table->string('nama', 255); // Nama dari kata kunci aktivitas

            // Menambahkan foreign key constraint
            $table->foreign('id_aktivitas')->references('id')->on('aktivitas_positif')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kata_kunci_aktivitas_positif');
    }
};
