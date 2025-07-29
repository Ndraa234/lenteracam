<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua data barang
        $barang = Barang::all();
        
        // Pisahkan berdasarkan kategori
        $cameras = $barang->where('id_kategori', 1); // id_kategori 1 = kamera
        $lenses = $barang->where('id_kategori', 2);  // id_kategori 2 = lensa
        
        return view('products', compact('cameras', 'lenses'));
    }

    public function show($id)
    {
        $product = Barang::findOrFail($id);
        $relatedProducts = Barang::where('id_kategori', $product->id_kategori)
                                ->where('id_barang', '!=', $id)
                                ->limit(4)
                                ->get();
        
        return view('product-detail', compact('product', 'relatedProducts'));
    }
} 