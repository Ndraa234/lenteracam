<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LENTERACAM Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            width: 280px;
            background: white;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid #e9ecef;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2d4e7c;
            text-decoration: none;
        }

        .menu-toggle {
            background: none;
            border: none;
            color: #666;
            font-size: 1.2rem;
            cursor: pointer;
            margin-left: 10px;
        }

        .sidebar-menu {
            padding: 20px 0;
        }

        .menu-item {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }

        .menu-item:hover {
            background: #f8f9fa;
            color: #2d4e7c;
            border-left-color: #2d4e7c;
        }

        .menu-item.active {
            background: linear-gradient(90deg, #2d4e7c, #5b6ea6);
            color: white;
            border-left-color: #2d4e7c;
        }

        .menu-item i {
            width: 20px;
            margin-right: 15px;
            font-size: 1.1rem;
        }

        .menu-text {
            font-weight: 500;
        }

        .sidebar.collapsed .menu-text {
            display: none;
        }

        /* Main Content */
        .main-content {
            margin-left: 280px;
            transition: all 0.3s ease;
        }

        .main-content.expanded {
            margin-left: 70px;
        }

        /* Top Bar */
        .top-bar {
            background: white;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .search-bar {
            position: relative;
            flex: 1;
            max-width: 500px;
            margin: 0 20px;
        }

        .search-input {
            width: 100%;
            padding: 10px 15px 10px 45px;
            border: 1px solid #e9ecef;
            border-radius: 25px;
            font-size: 0.9rem;
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile-pic {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #2d4e7c;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .user-info {
            display: flex;
            flex-direction: column;
        }

        .user-name {
            font-weight: 600;
            color: #333;
            font-size: 0.9rem;
        }

        .user-role {
            font-size: 0.8rem;
            color: #666;
        }

        /* Content Area */
        .content-area {
            padding: 30px;
            min-height: calc(100vh - 80px);
        }

        .content-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            min-height: 500px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
            }
            .sidebar.show {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <a href="{{ url('/admin') }}" class="logo">LENTERACAM</a>
            <button class="menu-toggle" id="sidebarToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        
        <div class="sidebar-menu">
            <div class="menu-label" style="padding: 0 20px 10px 20px; font-size: 0.8rem; color: #666; font-weight: 600;">
                <span class="menu-text">Menu</span>
            </div>
            
            <a href="{{ url('/admin') }}" class="menu-item {{ request()->is('admin') ? 'active' : '' }}">
                <i class="fa-solid fa-users"></i>
                <span class="menu-text">User Management</span>
            </a>
            
            <a href="{{ url('/admin/products') }}" class="menu-item {{ request()->is('admin/products*') ? 'active' : '' }}">
                <i class="fa-solid fa-th-large"></i>
                <span class="menu-text">Product</span>
            </a>
            
            <a href="{{ url('/admin/rentals') }}" class="menu-item {{ request()->is('admin/rentals*') ? 'active' : '' }}">
                <i class="fa-solid fa-shopping-cart"></i>
                <span class="menu-text">Rental</span>
            </a>
            
            <a href="{{ url('/admin/testimonials') }}" class="menu-item {{ request()->is('admin/testimonials*') ? 'active' : '' }}">
                <i class="fa-solid fa-comment"></i>
                <span class="menu-text">Testimonial</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Bar -->
        <div class="top-bar">
            <div class="search-bar">
                <i class="fa-solid fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Search">
            </div>
            
            <div class="user-profile dropdown">
                <div class="d-flex align-items-center" data-bs-toggle="dropdown" style="cursor: pointer;">
                    <div class="profile-pic">
                        {{ strtoupper(substr(Auth::guard('admin')->user()->username, 0, 2)) }}
                    </div>
                    <div class="user-info">
                        <div class="user-name">{{ Auth::guard('admin')->user()->username }}</div>
                        <div class="user-role">Administrator</div>
                    </div>
                    <i class="fa-solid fa-chevron-down" style="color: #666;"></i>
                </div>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                    </a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Content Area -->
        <div class="content-area">
            <div class="content-card">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* CSS untuk toggle sidebar tanpa JavaScript */
        #sidebarToggle:focus + .sidebar,
        .sidebar:hover {
            width: 280px;
        }
        
        #sidebarToggle:focus + .sidebar .menu-text,
        .sidebar:hover .menu-text {
            display: inline !important;
        }
        
        #sidebarToggle:focus ~ .main-content,
        .sidebar:hover ~ .main-content {
            margin-left: 280px;
        }
    </style>
    @yield('scripts')
</body>
</html> 