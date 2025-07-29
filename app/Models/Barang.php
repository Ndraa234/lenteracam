<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    public $timestamps = false;

    protected $fillable = [
        'nama_barang',
        'deskripsi',
        'spesifikasi',
        'gambar',
        'stok',
        'id_kategori',
        'hargasewa_satuhari',
        'hargasewa_tigahari',
        'create_at',
    ];

    // Relasi ke tabel kategori
    // id_kategori: 1 = kamera, 2 = lensa
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }
} 