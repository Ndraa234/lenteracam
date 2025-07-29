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
    Schema::table('barang', function (Blueprint $table) {
        // tambah kolom kategori_id
        $table->foreignId('kategori_id')
              ->constrained('kategori') // nama tabel kategori
              ->onDelete('cascade');   // jika kategori dihapus, barang ikut terhapus
    });
}

public function down(): void
{
    Schema::table('barang', function (Blueprint $table) {
        // hapus foreign key & kolom saat rollback
        $table->dropForeign(['kategori_id']);
        $table->dropColumn('kategori_id');
    });
}

};
