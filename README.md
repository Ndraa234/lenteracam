# Lentera Cam - Camera Rental System

A modern camera rental management system built with Laravel 11.

## 🎯 About

Lentera Cam is a comprehensive camera rental platform that allows users to browse, rent, and manage camera equipment. The system includes both user-facing features and an admin panel for managing products, rentals, and users.

## ✨ Features

### User Features
- Browse camera and lens catalog
- View detailed product information
- User registration and authentication
- Rental management
- Testimonials and reviews

### Admin Features
- **Secure Admin Login**: Protected admin panel with authentication
- **Product Management**: Add, edit, and delete camera equipment
- **Inventory Management**: Track stock levels and availability
- **User Management**: Manage customer accounts
- **Rental Management**: Process and track rentals
- **Dashboard Analytics**: Real-time statistics and insights

## 🛠️ Technology Stack

- **Backend**: Laravel 11
- **Frontend**: Bootstrap 5, Blade Templates
- **Database**: MySQL
- **Authentication**: Laravel's built-in auth system with custom admin guard

## 📋 Requirements

- PHP 8.2+
- Composer
- MySQL 5.7+
- Node.js & NPM (for asset compilation)

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd lenteracam
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   - Update `.env` file with your database credentials
   - Run migrations: `php artisan migrate`
   - Seed the database: `php artisan db:seed`

5. **Start the application**
   ```bash
   php artisan serve
   ```

## 🔐 Admin Access

Default admin credentials:
- **Username**: `admin`
- **Password**: `admin123`
- **Login URL**: `/admin/login`

## 📁 Project Structure

```
lenteracam/
├── app/
│   ├── Http/Controllers/
│   │   ├── AdminController.php    # Admin panel logic
│   │   ├── LandingController.php  # Landing page
│   │   ├── ProductController.php  # Product management
│   │   └── DashboardController.php
│   ├── Models/
│   │   ├── Admin.php             # Admin user model
│   │   ├── Barang.php            # Product model
│   │   ├── Kategori.php          # Category model
│   │   └── User.php              # Customer model
│   └── Http/Middleware/
│       └── AdminMiddleware.php   # Admin authentication
├── resources/views/
│   ├── admin/                    # Admin panel views
│   │   ├── login.blade.php
│   │   ├── dashboard.blade.php
│   │   └── products.blade.php
│   └── layouts/
│       └── admin.blade.php       # Admin layout
└── routes/
    └── web.php                   # Application routes
```

## 🔧 Configuration

### Admin Authentication
The admin system uses a separate authentication guard:
- **Guard**: `admin`
- **Provider**: `admins`
- **Model**: `App\Models\Admin`
- **Table**: `admin`

### Database Tables
- `admin` - Admin users
- `users` - Customer accounts
- `barang` - Products (cameras/lenses)
- `kategori` - Product categories
- `penyewaan` - Rental transactions

## 🎨 Customization

### Styling
- Admin panel uses Bootstrap 5 with custom CSS
- Responsive design for mobile devices
- Modern gradient backgrounds and card layouts

### Adding New Features
1. Create controller methods in `AdminController`
2. Add routes in `routes/web.php`
3. Create views in `resources/views/admin/`
4. Update navigation in `resources/views/layouts/admin.blade.php`

## 📝 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## 📞 Support

For support and questions, please contact the development team.

---

**Lentera Cam** - Making camera rental simple and efficient.
