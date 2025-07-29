@extends('layouts.index')

@section('title', $product->nama_barang . ' - LENTERACAM')

@section('styles')
<style>
<style>
    /* Breadcrumb */
    .breadcrumb-section {
        background: white;
        padding: 20px 0;
        border-bottom: 1px solid #e9ecef;
    }

    .breadcrumb-item a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .breadcrumb-item a:hover {
        color: var(--accent-color);
        text-decoration: underline;
    }

    .breadcrumb-item.active {
        color: #666;
    }

    /* Product Detail */
    .product-detail-section {
        padding: 60px 0;
    }

    .product-image-container {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }

    .product-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 15px;
    }

    .product-info {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        height: fit-content;
    }

    .product-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 20px;
    }

    .product-category {
        background: var(--secondary-color);
        color: var(--primary-color);
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
    }

    .product-rating {
        margin-bottom: 25px;
    }

    .star {
        color: #ffc107;
        font-size: 1.3rem;
        margin-right: 5px;
    }

    .rating-text {
        color: #666;
        margin-left: 10px;
    }

    .product-price {
        background: var(--secondary-color);
        padding: 25px;
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .price-label {
        font-size: 1.1rem;
        color: var(--primary-color);
        font-weight: 600;
        margin-bottom: 10px;
    }

    .price-value {
        font-size: 2rem;
        font-weight: bold;
        color: var(--accent-color);
        margin-bottom: 5px;
    }

    .price-period {
        color: #666;
        font-size: 0.9rem;
    }

    .product-stock {
        background: #e8f5e8;
        color: #2e7d32;
        padding: 15px 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        font-weight: 600;
    }

    .stock-out {
        background: #ffebee;
        color: #c62828;
    }

    .rent-button {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 15px 40px;
        border-radius: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        width: 100%;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    .rent-button:hover {
        background: var(--accent-color);
        transform: scale(1.02);
    }

    .contact-button {
        background: transparent;
        color: var(--primary-color);
        border: 2px solid var(--primary-color);
        padding: 15px 40px;
        border-radius: 25px;
        font-size: 1.1rem;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s ease;
    }

    .contact-button:hover {
        background: var(--primary-color);
        color: white;
    }

    /* Product Description */
    .product-description {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        margin-bottom: 40px;
    }

    .section-title {
        font-size: 1.8rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 25px;
    }

    .description-text {
        color: #333;
        line-height: 1.8;
        font-size: 1.1rem;
    }

    /* Related Products */
    .related-section {
        padding: 60px 0;
    }

    .related-title {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
        text-align: center;
        margin-bottom: 50px;
    }

    .related-card {
        background: white;
        border-radius: 20px;
        padding: 25px;
        height: 100%;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        border: none;
        text-decoration: none;
        color: inherit;
    }

    .related-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        text-decoration: none;
        color: inherit;
    }

    .related-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 15px;
        margin-bottom: 20px;
    }

    .related-name {
        font-size: 1.2rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .related-price {
        color: var(--accent-color);
        font-weight: bold;
        margin-bottom: 15px;
    }

    .related-rating {
        margin-bottom: 20px;
    }

    .related-star {
        color: #ffc107;
        font-size: 1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .product-title {
            font-size: 2rem;
        }
        
        .product-image {
            height: 300px;
        }
        
        .related-title {
            font-size: 2rem;
        }
            }
    </style>
@endsection

@section('content')
    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}">Products</a></li>
                    <li class="breadcrumb-item active">{{ $product->nama_barang }}</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Product Detail -->
    <section class="product-detail-section">
        <div class="container">
            <div class="row">
                <!-- Product Image -->
                <div class="col-lg-6">
                    <div class="product-image-container">
                        <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" class="product-image">
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <h1 class="product-title">{{ $product->nama_barang }}</h1>
                        
                        <div class="product-category">
                            {{ $product->kategori ? ucfirst($product->kategori->kategori) : 'Unknown Category' }}
                        </div>

                        <div class="product-rating">
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <span class="rating-text">5.0 (Excellent)</span>
                        </div>

                        <div class="product-price">
                            <div class="row">
                                <div class="col-6">
                                    <div class="price-label">Price per Day</div>
                                    <div class="price-value">Rp {{ number_format($product->hargasewa_satuhari,0,',','.') }}</div>
                                    <div class="price-period">Daily Rate</div>
                                </div>
                                <div class="col-6">
                                    <div class="price-label">Price for 3 Days</div>
                                    <div class="price-value">Rp {{ number_format($product->hargasewa_tigahari,0,',','.') }}</div>
                                    <div class="price-period">3-Day Package</div>
                                </div>
                            </div>
                        </div>

                        <div class="product-stock {{ $product->stok <= 0 ? 'stock-out' : '' }}">
                            <i class="fa-solid fa-box me-2"></i>
                            @if($product->stok > 0)
                                Available: {{ $product->stok }} units in stock
                            @else
                                Out of Stock
                            @endif
                        </div>

                        @if($product->stok > 0)
                            <button class="rent-button">
                                <i class="fa-solid fa-camera me-2"></i>Rent Now
                            </button>
                        @endif
                        
                        <button class="contact-button">
                            <i class="fa-solid fa-phone me-2"></i>Contact Us
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Description -->
    <section class="product-description">
        <div class="container">
            <h2 class="section-title">Product Description</h2>
            <div class="description-text">
                {{ $product->deskripsi }}
            </div>
        </div>
    </section>

    <!-- Product Specifications -->
    <section class="product-description">
        <div class="container">
            <h2 class="section-title">Specifications</h2>
            <div class="description-text">
                {!! nl2br(e($product->spesifikasi)) !!}
            </div>
        </div>
    </section>

    <!-- Related Products -->
    @if($relatedProducts->count() > 0)
    <section class="related-section">
        <div class="container">
            <h2 class="related-title">Related Products</h2>
            <div class="row g-4">
                @foreach($relatedProducts as $related)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <a href="{{ route('product.detail', $related->id_barang) }}" class="related-card">
                        <img src="{{ asset('images/' . $related->gambar) }}" alt="{{ $related->nama_barang }}" class="related-image">
                        <div class="related-name">{{ $related->nama_barang }}</div>
                        <div class="related-price">
                            Rp. {{ number_format($related->hargasewa_satuhari,0,',','.') }}/Day
                        </div>
                        <div class="related-rating">
                            <i class="fa-solid fa-star related-star"></i>
                            <i class="fa-solid fa-star related-star"></i>
                            <i class="fa-solid fa-star related-star"></i>
                            <i class="fa-solid fa-star related-star"></i>
                            <i class="fa-solid fa-star related-star"></i>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection 