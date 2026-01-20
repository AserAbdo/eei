# EEI Project Documentation

## 📋 Overview

**EEI** is a comprehensive content management system (CMS) built with Laravel. It serves as a platform for managing services, categories, partners, staff, galleries, and various website content. The application features both a **public-facing website** and a **protected admin dashboard** for content management.

---

## 🚀 What the Application Does

### Public Website
- **Home Page**: Displays categories with associated services, configurable homepage settings
- **About Page**: Company information with photo galleries
- **Services Page**: Showcases available services organized by categories
- **Certificate Page**: Displays company certifications with gallery support
- **Contact Page**: Contact information and communication details
- **Category & Service Details**: Individual detail pages for categories and services

### Admin Dashboard
- **Dashboard**: Central admin interface (protected by authentication)
- **Categories Management**: CRUD operations for service categories with soft delete/restore
- **Services Management**: Full service management with category associations
- **Gallery Management**: Media upload and organization with category-based galleries
- **Partners Management**: Manage partner/client logos and information
- **Staff Management**: Team member management
- **Settings**: 
  - Site Settings (general configuration)
  - Homepage Settings (hero sections, banners, content)
  - About Page Settings
  - Certificate Settings
- **Activity Logs**: Track system activities

---

## 🛠️ Tech Stack

### Laravel Version
- **Laravel Framework**: `^10.10`
- **PHP**: `^8.1`

### Key Packages

| Package | Version | Purpose |
|---------|---------|---------|
| `laravel/sanctum` | `^3.3` | API token authentication |
| `laravel/breeze` | `^1.29` | Authentication scaffolding (dev) |
| `spatie/laravel-translatable` | `^6.10` | Multi-language content support |
| `guzzlehttp/guzzle` | `^7.2` | HTTP client for API requests |
| `laravel/tinker` | `^2.8` | REPL for Laravel |
| `laravel/sail` | `^1.18` | Docker development environment |

### Frontend
- **Tailwind CSS**: Utility-first CSS framework
- **Vite**: Frontend build tool
- **PostCSS**: CSS processing

---

## 🗄️ Database Structure

### Core Tables

| Table | Description | Key Fields |
|-------|-------------|------------|
| `users` | User accounts | name, email, password |
| `categories` | Service categories | name, description, image, icon |
| `services` | Services/offerings | name, image, package_size, description, content, status, category_id |
| `partners` | Partner organizations | (extended via migrations) |
| `staff` | Team members | Standard staff fields |
| `galleries` | Media files | gallery_category_id, file info |
| `media_categories` | Gallery categories | Category organization for media |

### Settings & Configuration Tables

| Table | Description |
|-------|-------------|
| `settings` | Global site settings (footer, etc.) |
| `home_pages` | Homepage configuration |
| `about_settings` | About page content + gallery references |
| `certificate_setting` | Certification page settings |
| `pages` | Static page content |

### System Tables

| Table | Description |
|-------|-------------|
| `logs` | Activity/audit logs |
| `password_reset_tokens` | Password reset functionality |
| `personal_access_tokens` | Sanctum API tokens |
| `failed_jobs` | Failed queue jobs |

### Relationships
```
Category (1) ──────> (N) Service
MediaCategory (1) ──> (N) Gallery
```

---

## 🔐 Authentication

### Method: **Laravel Sanctum + Breeze**

The application uses a dual authentication approach:

1. **Web Authentication (Session-based)**
   - Powered by **Laravel Breeze** for scaffolding
   - Traditional session-based authentication for web routes
   - Protected routes use `auth` and `verified` middleware
   - Profile management (edit, update, delete)

2. **API Authentication (Token-based)**
   - Powered by **Laravel Sanctum**
   - Token-based authentication for API endpoints
   - `HasApiTokens` trait on User model
   - Middleware: `auth:sanctum`

### User Model Features
```php
use HasApiTokens, HasFactory, Notifiable;
```

### Protected Routes Structure
- `/admin/*` - Requires `auth` middleware
- `/dashboard` - Requires `auth` + `verified` middleware
- `/api/user` - Requires `auth:sanctum` middleware
- `/profile/*` - Requires `auth` middleware

---

## 📁 Project Structure

```
eei/
├── app/
│   ├── Http/Controllers/
│   │   ├── Auth/              # Authentication controllers (Breeze)
│   │   ├── Website/           # Public website controllers
│   │   │   ├── CategoryController.php
│   │   │   ├── ServiceController.php
│   │   │   └── PhotoGalleryController.php
│   │   ├── CategoryController.php    # Admin
│   │   ├── ServiceController.php     # Admin
│   │   ├── GalleryController.php     # Admin
│   │   ├── SettingController.php     # Admin
│   │   └── ...
│   └── Models/
│       ├── User.php
│       ├── Category.php
│       ├── Service.php
│       ├── Gallery.php
│       ├── Setting.php
│       └── ...
├── routes/
│   ├── web.php               # Main web routes (includes admin.php & website.php)
│   ├── admin.php             # Admin panel routes
│   ├── website.php           # Public website routes
│   ├── api.php               # API routes
│   └── auth.php              # Authentication routes (Breeze)
├── resources/
│   └── views/
│       ├── dashboard/        # Admin panel views
│       └── website/          # Public website views
├── database/
│   ├── migrations/           # Database migrations
│   ├── factories/            # Model factories
│   └── seeders/              # Database seeders
└── public/                   # Public assets
```

---

## 🎯 Custom Patterns & Conventions

### 1. Route Organization
Routes are split into separate files for maintainability:
- `admin.php` - All admin routes under `/admin` prefix with `auth` middleware
- `website.php` - Public-facing website routes
- `auth.php` - Authentication routes (Breeze generated)

### 2. Soft Deletes Pattern
Models support soft deletes with restore functionality:
```php
use SoftDeletes;
```
- Categories have dedicated "deleted" views and restore routes
- Pattern: `/deleted` for listing, `/restore/{id}` for restoration

### 3. Controller Namespace Convention
- `App\Http\Controllers\*` - Admin controllers
- `App\Http\Controllers\Website\*` - Public website controllers

### 4. Settings Pattern
Settings are stored as single records (ID: 1) in dedicated tables:
```php
$settings = HomePage::find(1);
$settings = AboutSetting::find(1);
```

### 5. Gallery/Media Pattern
Galleries are organized by categories:
```php
Gallery::where('gallery_category_id', $categoryId)->get();
```

### 6. Naming Conventions
- **Routes**: Use descriptive names with dot notation (`categories.list`, `service.edit`)
- **Models**: Singular PascalCase (`Category`, `Service`)
- **Controllers**: Singular with `Controller` suffix (`CategoryController`)

### 7. Multi-language Support
The project uses `spatie/laravel-translatable` for translatable content fields.

---

## 🔧 Development Setup

### Prerequisites
- PHP 8.1+
- Composer
- Node.js & NPM
- MySQL/PostgreSQL

### Installation
```bash
# Install PHP dependencies
composer install

# Install Node dependencies
npm install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Build assets
npm run dev
```

### Docker (Laravel Sail)
```bash
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate
```

---

## 📝 Notes

- The application uses **MySQL** as the primary database (configurable via `.env`)
- File uploads are stored in the `public` directory
- The admin panel is accessible at `/admin`
- Authentication is required for all admin operations
