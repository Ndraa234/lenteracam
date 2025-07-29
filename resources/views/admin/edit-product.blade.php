@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #2d4e7c;">Edit Product</h2>
        <a href="{{ url('/admin/products') }}" class="btn btn-outline-secondary">
            <i class="fa-solid fa-arrow-left me-2"></i>Back to Products
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ url('/admin/products/update/' . $product->id_barang) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="nama_barang" value="{{ $product->nama_barang }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select" name="id_kategori" required>
                            <option value="">Select Category</option>
                            @foreach($kategori as $kat)
                                <option value="{{ $kat->id_kategori }}" {{ $product->id_kategori == $kat->id_kategori ? 'selected' : '' }}>
                                    {{ ucfirst($kat->kategori) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="deskripsi" rows="3" required>{{ $product->deskripsi }}</textarea>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Specifications</label>
                    <textarea class="form-control" name="spesifikasi" rows="3" required>{{ $product->spesifikasi }}</textarea>
                </div>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Stock</label>
                        <input type="number" class="form-control" name="stok" min="0" value="{{ $product->stok }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Price/Day (Rp)</label>
                        <input type="number" class="form-control" name="hargasewa_satuhari" min="0" value="{{ $product->hargasewa_satuhari }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Price/3 Days (Rp)</label>
                        <input type="number" class="form-control" name="hargasewa_tigahari" min="0" value="{{ $product->hargasewa_tigahari }}" required>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Current Image</label>
                    <div class="mb-2">
                        <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px;">
                    </div>
                    <label class="form-label">Update Image (Optional)</label>
                    <input type="file" class="form-control" name="gambar" accept="image/*">
                    <small class="text-muted">Leave empty to keep current image. Upload image in JPG, PNG, or GIF format (max 2MB)</small>
                </div>
                
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save me-2"></i>Update Product
                    </button>
                    <a href="{{ url('/admin/products') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection 