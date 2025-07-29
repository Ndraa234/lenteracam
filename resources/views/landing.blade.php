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
        }

        .hero-section {
            background-color: #e9ecef;
            position: relative;
            padding: 100px 20px;
            overflow: hidden;
        }

        .hero-text {
            z-index: 2;
            position: relative;
        }

        .hero-image {
            position: absolute;
            top: 0;
            right: 0;
            width: 320px;
            max-width: 100%;
            z-index: 1;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            transition: 0.3s;
        }

        .product-card:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .product-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 hero-text">
                    <h1 class="display-5 fw-bold">Layanan Persewaan Kamera Profesional</h1>
                    <p class="lead">Dapatkan kamera terbaik untuk kebutuhan fotografi dan videografi Anda.</p>
                    <a href="#" class="btn btn-primary btn-lg">Lihat Produk</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/herocamera.png') }}" alt="Hero Camera" class="hero-image">
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4">Produk Unggulan</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="product-card">
                        <img src="{{ asset('images/kamera-tua.png') }}" alt="Kamera" class="product-image">
                        <h5 class="mt-3">Canon EOS 200D</h5>
                        <p class="text-muted">Mirrorless APS-C | 24MP | Lensa Kit</p>
                        <p class="fw-bold">Rp150.000 / hari</p>
                        <a href="#" class="btn btn-outline-primary w-100">Sewa Sekarang</a>
                    </div>
                </div>
                <!-- Tambah produk lain di sini -->
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 Lentera Rental. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
