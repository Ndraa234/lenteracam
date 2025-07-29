<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LENTERACAM')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2d4e7c;
            --secondary-color: #e3f2fd;
            --accent-color: #1976d2;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 15px 0;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary-color);
            text-decoration: none;
        }

        .navbar-nav .nav-link {
            color: var(--primary-color);
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: var(--accent-color);
        }

        .navbar-nav .nav-link.active {
            color: var(--accent-color);
            font-weight: 600;
        }

        /* Main Content */
        main {
            min-height: calc(100vh - 200px);
        }

        /* Footer */
        .footer {
            background: var(--secondary-color);
            padding: 50px 0 20px 0;
            margin-top: auto;
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
            .navbar-brand {
                font-size: 1.5rem;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">LENTERA</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products*') || request()->is('product/*') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/reviews') }}">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/my-rentals') }}">My Rentals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="padding-top: 80px;">
        @yield('content')
    </main>

    <!-- Footer -->
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
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ route('products') }}">Products</a>
                    <a href="{{ url('/reviews') }}">Reviews</a>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <div class="footer-title">General</div>
                    <a href="{{ url('/contact') }}">Contact Us</a>
                    <a href="{{ url('/my-rentals') }}">My Rentals</a>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Find Us</div>
                    <div>Malang, Indonesia</div>
                    <a href="#">View On Map</a>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-title mb-0">LENTERA</div>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="mb-2">
                        <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="social-icon"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                    <div style="color: #666; font-size: 0.9rem;">©LenteraCam2024. All right reserved.</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html> 