<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lentera Rental - Sewa Kamera</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #ffffff;
        }

        .hero-section {
            background: linear-gradient(90deg, #e6f0fa 0%, #2d4e7c 50%);
            position: relative;
            padding: 80px 0 60px 0;
            min-height: 500px;
            overflow: hidden;
        }

        .hero-text {
            color: #333;
            z-index: 3;
            position: relative;
        }

        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #555;
        }

        .hero-image {
            position: absolute;
            top: 50px;
            right: 100px;
            width: 350px;
            z-index: 2;
        }

        .vertical-text {
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            width: 150px;
            background: #2d4e7c;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            writing-mode: vertical-rl;
            text-orientation: mixed;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 3px;
            z-index: 1;
        }

        .btn-primary {
            background: #2d4e7c;
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
        }

        .btn-outline-primary {
            border: 2px solid #2d4e7c;
            color: #2d4e7c;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: 500;
        }

        .btn-outline-primary:hover {
            background: #2d4e7c;
            color: white;
        }

        .section-title {
            color: #2d4e7c;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: #2d4e7c;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #2d4e7c;
            margin-bottom: 15px;
        }

        .feature-card {
            text-align: center;
            padding: 20px;
        }

        .feature-card h5 {
            color: #2d4e7c;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-card {
            border: 1px solid #e0e0e0;
            border-radius: 15px;
            padding: 20px;
            background: #fff;
            transition: all 0.3s ease;
            height: 100%;
        }

        .product-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: contain;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .product-name {
            color: #2d4e7c;
            font-weight: bold;
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .product-stock {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .product-price {
            color: #2d4e7c;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .maintenance-section {
            background: #f8f9fa;
            padding: 60px 0;
            margin-top: 60px;
        }

        .maintenance-img {
            width: 100%;
            max-width: 300px;
            border-radius: 15px;
        }

        .testimonial-card {
            background: rgba(45, 78, 124, 0.1);
            border-radius: 15px;
            padding: 25px;
            margin: 10px;
            backdrop-filter: blur(5px);
        }

        .testimonial-name {
            color: #2d4e7c;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .testimonial-rental {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .footer {
            background: #e6f0fa;
            color: #333;
            padding: 50px 0 20px 0;
        }

        .footer-title {
            color: #2d4e7c;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        .footer a {
            color: #2d4e7c;
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
            color: #2d4e7c;
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2rem;
            }
            .hero-image {
                width: 250px;
                right: 20px;
            }
            .vertical-text {
                width: 80px;
                font-size: 1rem;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1>Find Your Best Camera!</h1>
                    <p>Camera Rental Made Easy ~ Online Booking, Store Pickup, Pay on the Spot (COD). Malang Area Only.</p>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">Login</a>
                        <a href="{{ route('products') }}" class="btn btn-outline-primary">View Products</a>
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
                <a href="{{ route('products') }}" class="btn btn-primary px-4">Other Products &gt;</a>
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

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div class="footer-title">Choose and use your favorite product</div>
                    <div class="mb-2">
                        <i class="fa-solid fa-envelope me-2"></i>
                        lenteracamforg@gmail.com
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="footer-title">Features</div>
                    <a href="#">Home</a>
                    <a href="#">Product</a>
                    <a href="#">Review</a>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="footer-title">General</div>
                    <a href="#">Contact Us</a>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Find Us</div>
                    <div class="mb-2">Malang, Indonesia</div>
                    <a href="#">View On Map</a>
                </div>
            </div>
            <div class="border-top pt-3">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <div class="fw-bold" style="color: #2d4e7c;">LENTERA</div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <div class="col-md-4 text-end">
                        <small>&copy; Lentera2024. All right reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
