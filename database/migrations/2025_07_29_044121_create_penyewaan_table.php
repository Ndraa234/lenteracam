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
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('barang_id')->constrained('barang');
            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->enum('durasi', ['1_hari', '3_hari']);
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['pending', 'diterima', 'ditolak']);
            $table->decimal('denda', 10, 2);
            $table->enum('status_pembayaran', ['pending', 'lunas', 'dibatalkan']);
            $table->enum('jaminan', ['ktp','kartu_pelajar']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyewaan');
    }
};
