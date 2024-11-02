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
        Schema::create('produks', function (Blueprint $table) {
            $table->id('kode_produk'); // Menggunakan kode_produk sebagai ID
            $table->string('nama_produk'); // Nama produk
            $table->text('deskripsi')->nullable(); // Deskripsi, bisa null
            $table->integer('harga'); // Harga produk
            $table->integer('jumlah_produk'); // Jumlah produk
            $table->string('image')->nullable(); // Gambar produk, bisa null
            $table->timestamps(); // Timestamps (created_at dan updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
