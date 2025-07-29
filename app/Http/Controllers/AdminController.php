<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Admin;

class AdminController extends Controller
{

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('username', 'password');
        
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Welcome back, ' . Auth::guard('admin')->user()->username . '!');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login')->with('success', 'You have been successfully logged out.');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function products()
    {
        $barang = Barang::all();
        $kategori = Kategori::all();
        return view('admin.products', compact('barang', 'kategori'));
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'spesifikasi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stok' => 'required|integer|min:0',
            'id_kategori' => 'required|integer',
            'hargasewa_satuhari' => 'required|numeric|min:0',
            'hargasewa_tigahari' => 'required|numeric|min:0',
        ]);

        // Handle image upload
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        // Create new product
        // id_kategori: 1 = kamera, 2 = lensa (sesuai tabel kategori)
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'spesifikasi' => $request->spesifikasi,
            'gambar' => $imageName,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori, // 1 untuk kamera, 2 untuk lensa
            'hargasewa_satuhari' => $request->hargasewa_satuhari,
            'hargasewa_tigahari' => $request->hargasewa_tigahari,
            'create_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function rentals()
    {
        return view('admin.rentals');
    }

    public function editProduct($id)
    {
        $product = Barang::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.edit-product', compact('product', 'kategori'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'spesifikasi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'stok' => 'required|integer|min:0',
            'id_kategori' => 'required|integer',
            'hargasewa_satuhari' => 'required|numeric|min:0',
            'hargasewa_tigahari' => 'required|numeric|min:0',
        ]);

        $product = Barang::findOrFail($id);
        
        $data = [
            'nama_barang' => $request->nama_barang,
            'deskripsi' => $request->deskripsi,
            'spesifikasi' => $request->spesifikasi,
            'stok' => $request->stok,
            'id_kategori' => $request->id_kategori,
            'hargasewa_satuhari' => $request->hargasewa_satuhari,
            'hargasewa_tigahari' => $request->hargasewa_tigahari,
        ];

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['gambar'] = $imageName;
        }

        $product->update($data);

        return redirect()->route('admin.products')->with('success', 'Product updated successfully!');
    }

    public function deleteProduct($id)
    {
        $product = Barang::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products')->with('success', 'Product deleted successfully!');
    }

    public function testimonials()
    {
        return view('admin.testimonials');
    }

    public function createAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:50|unique:admin,username',
            'password' => 'required|string|min:6',
        ]);

        Admin::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Admin user created successfully!');
    }
} 