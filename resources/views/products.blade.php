@extends('layouts.index')

@section('title', 'Products - LENTERACAM')

@section('styles')
<style>

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #ffffff 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .search-container {
            position: relative;
            max-width: 500px;
            margin: 30px 0;
        }

        .search-input {
            width: 100%;
            padding: 15px 50px 15px 20px;
            border: 2px solid var(--primary-color);
            border-radius: 30px;
            font-size: 1.1rem;
            outline: none;
        }

        .search-btn {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-image {
            position: absolute;
            right: -50px;
            top: 50%;
            transform: translateY(-50%);
            width: 400px;
            z-index: 1;
        }

        /* Banner Section */
        .banner-section {
            padding: 60px 0;
        }

        .banner-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            height: 300px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .banner-card:hover {
            transform: translateY(-5px);
        }

        .banner-camera {
            background: linear-gradient(135deg, var(--secondary-color) 0%, #ffffff 100%);
        }

        .banner-lenses {
            background: linear-gradient(135deg, #ffffff 0%, var(--secondary-color) 100%);
        }

        .banner-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .banner-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .banner-btn:hover {
            background: var(--accent-color);
            color: white;
            transform: scale(1.05);
        }

        .banner-image {
            position: absolute;
            right: -20px;
            bottom: -20px;
            width: 200px;
            opacity: 0.8;
        }

        /* Product Sections */
        .product-section {
            padding: 60px 0;
        }

        .section-title {
            font-size: 3rem;
            font-weight: bold;
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 50px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            border: none;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .product-stock {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .product-price {
            color: var(--accent-color);
            font-weight: bold;
            margin-bottom: 15px;
        }

        .product-rating {
            margin-bottom: 20px;
        }

        .star {
            color: #ffc107;
            font-size: 1.1rem;
        }

        .view-details-btn {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            width: 100%;
            text-align: center;
        }

        .view-details-btn:hover {
            background: var(--accent-color);
            color: white;
            transform: scale(1.02);
        }

        /* Footer */
        .footer {
            background: var(--secondary-color);
            padding: 50px 0 20px 0;
        }

        .footer-title {
            color: var(--primary-color);
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .footer a {
            color: var(--primary-color);
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: var(--primary-color);
        }

        /* Footer */
        .footer {
            background: var(--secondary-color);
            padding: 50px 0 20px 0;
        }

        .footer-title {
            color: var(--primary-color);
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .footer a {
            color: var(--primary-color);
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            color: var(--primary-color);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-image {
                display: none;
            }
            
            .banner-card {
                margin-bottom: 30px;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }
    </style>
@endsection

@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">This is our product!<br>Find your best.</h1>
                    <div class="search-container">
                        <input type="text" class="search-input" placeholder="Cari Produk..">
                        <button class="search-btn">
                            <i class="fa-solid fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/herocamera.png') }}" alt="Camera Lens" class="hero-image">
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="banner-card banner-camera">
                        <h2 class="banner-title">Choose Your<br>CAMERA</h2>
                        <a href="#camera-section" class="banner-btn">SHOW</a>
                        <img src="{{ asset('images/camera-banner.png') }}" alt="Camera" class="banner-image">
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="banner-card banner-lenses">
                        <h2 class="banner-title">Choose Your<br>LENSES</h2>
                        <a href="#lenses-section" class="banner-btn">SHOW</a>
                        <img src="{{ asset('images/lens-banner.png') }}" alt="Lens" class="banner-image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Camera Section -->
    <section id="camera-section" class="product-section">
        <div class="container">
            <h2 class="section-title">CAMERA</h2>
            <div class="row g-4">
                @foreach($cameras as $camera)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="{{ asset('images/' . $camera->gambar) }}" alt="{{ $camera->nama_barang }}" class="product-image">
                        <div class="product-name">{{ $camera->nama_barang }}</div>
                        <div class="product-stock">Stok : {{ $camera->stok }}</div>
                        <div class="product-price">
                            Rp. {{ number_format($camera->hargasewa_satuhari,0,',','.') }}/Day<br>
                            Rp. {{ number_format($camera->hargasewa_tigahari,0,',','.') }}/3 Days
                        </div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                        </div>
                        <a href="{{ route('product.detail', $camera->id_barang) }}" class="view-details-btn">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Lenses Section -->
    <section id="lenses-section" class="product-section">
        <div class="container">
            <h2 class="section-title">LENSES</h2>
            <div class="row g-4">
                @foreach($lenses as $lens)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product-card">
                        <img src="{{ asset('images/' . $lens->gambar) }}" alt="{{ $lens->nama_barang }}" class="product-image">
                        <div class="product-name">{{ $lens->nama_barang }}</div>
                        <div class="product-stock">Stok : {{ $lens->stok }}</div>
                        <div class="product-price">
                            Rp. {{ number_format($lens->hargasewa_satuhari,0,',','.') }}/Day<br>
                            Rp. {{ number_format($lens->hargasewa_tigahari,0,',','.') }}/3 Days
                        </div>
                        <div class="product-rating">
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                            <i class="fa-solid fa-star star"></i>
                        </div>
                        <a href="{{ route('product.detail', $lens->id_barang) }}" class="view-details-btn">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection 