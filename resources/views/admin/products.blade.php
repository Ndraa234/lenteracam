@extends('layouts.admin')

@section('title', 'Products Management - LENTERACAM')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 style="color: #2d4e7c; font-weight: bold;">Products Management</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
            <i class="fa-solid fa-plus me-2"></i>Add New Product
        </button>
    </div>

    <!-- Products Table -->
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white border-0">
            <h5 class="mb-0" style="color: #2d4e7c;">All Products</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Stock</th>
                            <th>Price/Day</th>
                            <th>Price/3 Days</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $product)
                        <tr>
                            <td>
                                <img src="{{ asset('images/' . $product->gambar) }}" 
                                     alt="{{ $product->nama_barang }}" 
                                     style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                            </td>
                            <td>
                                <div class="fw-bold">{{ $product->nama_barang }}</div>
                                <small class="text-muted">{{ Str::limit($product->deskripsi, 50) }}</small>
                            </td>
                            <td>
                                <span class="badge bg-secondary">{{ $product->kategori ? ucfirst($product->kategori->kategori) : 'Unknown' }}</span>
                            </td>
                            <td>
                                <span class="badge {{ $product->stok > 0 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $product->stok }}
                                </span>
                            </td>
                            <td>Rp {{ number_format($product->hargasewa_satuhari,0,',','.') }}</td>
                            <td>Rp {{ number_format($product->hargasewa_tigahari,0,',','.') }}</td>
                            <td>
                                <span class="badge {{ $product->stok > 0 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $product->stok > 0 ? 'Available' : 'Out of Stock' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ url('/admin/products/edit/' . $product->id_barang) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form action="{{ url('/admin/products/delete/' . $product->id_barang) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Product Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" style="color: #2d4e7c;">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ url('/admin/products/store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" name="nama_barang" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select" name="id_kategori" required>
                                    <option value="">Select Category</option>
                                    @foreach($kategori as $kat)
                                        {{-- id_kategori: 1 = kamera, 2 = lensa --}}
                                        <option value="{{ $kat->id_kategori }}">{{ ucfirst($kat->kategori) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" name="deskripsi" rows="3" required></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Specifications</label>
                            <textarea class="form-control" name="spesifikasi" rows="3" required></textarea>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Stock</label>
                                <input type="number" class="form-control" name="stok" min="0" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Price/Day (Rp)</label>
                                <input type="number" class="form-control" name="hargasewa_satuhari" min="0" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Price/3 Days (Rp)</label>
                                <input type="number" class="form-control" name="hargasewa_tigahari" min="0" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">Product Image</label>
                            <input type="file" class="form-control" name="gambar" accept="image/*" required>
                            <small class="text-muted">Upload image in JPG, PNG, or GIF format (max 2MB)</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
{{-- JavaScript dihapus, menggunakan Laravel murni --}}
@endsection 