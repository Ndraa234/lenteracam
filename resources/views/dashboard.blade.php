@extends('layouts.index')

@section('title', 'Dashboard - Lentera Rental')

@section('content')
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>Find Your Best Camera!</h1>
                    <p>Hai, ...</p>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/products') }}" class="btn btn-primary">Browse Products</a>
                        <a href="{{ url('/my-rentals') }}" class="btn btn-outline-primary">My Rentals</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/herocamera.png') }}" alt="Canon EOS 200D" class="hero-image">
        <div class="vertical-text">PERSEWAAN<br>CAMERA</div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Why choose us?</h2>
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h5>Efisien</h5>
                        <p class="text-muted">Focus only on equipment pick-up and return.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <h5>Safety</h5>
                        <p class="text-muted">Cash on Delivery system, safe with no upfront transfer.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h5>Quality</h5>
                        <p class="text-muted">Top quality, all rental items in perfect condition, no defects.</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fa-solid fa-list-check"></i>
                        </div>
                        <h5>Comprehensive</h5>
                        <p class="text-muted">Prices, rental terms, and item availability are all listed directly on the website.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR PRODUCTS -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Our Products</h2>
            <div class="row g-4">
                @foreach($barang as $product)
                <div class="col-md-6 col-lg-3">
                    <div class="product-card">
                        <img src="{{ asset('images/' . $product->gambar) }}" alt="{{ $product->nama_barang }}" class="product-image">
                        <div class="product-name">{{ $product->nama_barang }}</div>
                        <div class="product-stock">
                            <span class="badge bg-secondary me-2">{{ $product->kategori ? ucfirst($product->kategori->kategori) : 'Unknown' }}</span>
                            Stok : {{ $product->stok }}
                        </div>
                        <div class="product-price">
                            Rp. {{ number_format($product->hargasewa_satuhari,0,',','.') }}/Day<br>
                            Rp. {{ number_format($product->hargasewa_tigahari,0,',','.') }}/3 Days
                        </div>
                        <a href="{{ route('product.detail', $product->id_barang) }}" class="btn btn-outline-primary w-100">View Details</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('products') }}" class="btn btn-primary px-4">View All Products &gt;</a>
            </div>
        </div>
    </section>

    <!-- MAINTENANCE TIPS -->
    <section class="maintenance-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 text-center mb-4 mb-md-0">
                    <img src="{{ asset('images/kamera-tua.png') }}" alt="Kamera" class="maintenance-img">
                </div>
                <div class="col-md-8">
                    <h4 class="fw-bold mb-3" style="color: #2d4e7c;">Camera Maintenance Tips</h4>
                    <p class="mb-0" style="color: #333; line-height: 1.6;">
                        Gunakan kamera dengan tangan bersih dan kering. Hindari menyentuh lensa langsung dan jangan bongkar pasang lensa sembarangan. Simpan kamera di tas khusus, jauhkan dari air, debu, dan panas. Gunakan strap saat memotret agar tidak jatuh, dan bersihkan lensa hanya dengan kain khusus. Jika ada masalah, segera laporkan ke pihak rental. Rawat baik-baik, agar hasil jepretan maksimal dan bebas biaya kerusakan!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="py-5">
        <div class="container">
            <h2 class="section-title">Customer Testimonials</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-name">Yustira Fatimah</div>
                        <div class="testimonial-rental">Sewa : Canon EOS R6 Mark II</div>
                        <div class="small">
                            MANTAP BANGETTTT KAKKK, AKU SEWA BUAT ACARA PENTAS SENI DI SEKOLAH DAN HASIL JEPRETANNYA BAGUS. SELAIN SKILL KU, KAMERA NYA YG NGEBUAT HASILNYA BAGUS. GADA LECET SAMSEK TOPPP. hehe makasih kak
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-name">Xiu Minghao</div>
                        <div class="testimonial-rental">Sewa : Canon EOS R6 Mark II</div>
                        <div class="small">
                            MANTAP BANGETTTT KAKKK, AKU SEWA BUAT ACARA PENTAS SENI DI SEKOLAH DAN HASIL JEPRETANNYA BAGUS. SELAIN SKILL KU, KAMERA NYA YG NGEBUAT HASILNYA BAGUS. GADA LECET SAMSEK TOPPP. hehe makasih kak
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="testimonial-card">
                        <div class="testimonial-name">Yustira Fatimah</div>
                        <div class="testimonial-rental">Sewa : Canon EOS R6 Mark II</div>
                        <div class="small">
                            MANTAP BANGETTTT KAKKK, AKU SEWA BUAT ACARA PENTAS SENI DI SEKOLAH DAN HASIL JEPRETANNYA BAGUS. SELAIN SKILL KU, KAMERA NYA YG NGEBUAT HASILNYA BAGUS. GADA LECET SAMSEK TOPPP. hehe makasih kak
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection 