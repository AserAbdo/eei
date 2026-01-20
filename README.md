# EEI - Egyptian Company for Electrical Industries

![EEI Logo](public/assets/img/logo.svg)

A modern, responsive website for the Egyptian Company for Electrical Industries (EEI), built with Laravel. The website showcases electrical products and services including Low Voltage Panels, Medium Voltage Panels, and more.

## 🚀 Features

- **Modern UI Design** - Clean, professional design following Figma specifications
- **Responsive Layout** - Fully responsive across all devices
- **Dynamic Content Management** - Admin panel for managing:
  - Services & Categories
  - Certificates
  - FAQs
  - Settings & Content
- **Interactive Service Cards** - Hover effects with sliding red panel
- **Contact Form** - Customer inquiry system
- **Multi-language Ready** - Prepared for internationalization

## 🛠️ Tech Stack

- **Backend:** Laravel 10.x
- **Frontend:** Blade Templates, Bootstrap 5
- **Database:** MySQL
- **CSS:** Custom CSS with modern design patterns
- **Icons:** Bootstrap Icons
- **Fonts:** Google Fonts (Roboto, Inter, Nunito)

## 📋 Requirements

- PHP >= 8.1
- Composer
- MySQL >= 5.7
- Node.js & NPM (for assets compilation)

## ⚙️ Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/eei.git
   cd eei
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Configure database**
   
   Update `.env` file with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=eei
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Seed the database (optional)**
   ```bash
   php artisan db:seed
   ```

8. **Create storage link**
   ```bash
   php artisan storage:link
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

   Visit `http://127.0.0.1:8000` in your browser.

## 📁 Project Structure

```
eei/
├── app/
│   ├── Http/Controllers/
│   │   ├── Admin/           # Admin panel controllers
│   │   └── Website/         # Frontend controllers
│   └── Models/              # Eloquent models
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── public/
│   └── assets/
│       ├── css/             # Stylesheets
│       ├── img/             # Images
│       └── js/              # JavaScript files
├── resources/
│   └── views/
│       ├── admin/           # Admin panel views
│       └── website/         # Frontend views
│           ├── pages/       # Page templates
│           └── partials/    # Reusable components
└── routes/
    ├── web.php              # Main routes
    ├── website.php          # Frontend routes
    └── admin.php            # Admin routes
```

## 🎨 Design Features

### Homepage Sections
- **Hero Slider** - Full-width carousel with CTA
- **Who Are We** - Company introduction with feature cards
- **Our Services** - Interactive cards with hover effects
- **Why EEI** - Company benefits with checkmarks
- **FAQ** - Accordion-style questions
- **Contact Form** - Dark-themed contact section

### Service Cards
- Clean white cards in default state
- On hover: Image background with external red panel
- Smooth animations and transitions

## 👤 Admin Panel

Access the admin panel at `/admin` with:
- Dashboard with statistics
- Service/Category management
- Certificate management
- FAQ management
- Settings management

## 🔧 Configuration

### Mail Configuration
Update `.env` for email functionality:
```env
MAIL_MAILER=smtp
MAIL_HOST=your-mail-host
MAIL_PORT=587
MAIL_USERNAME=your-email
MAIL_PASSWORD=your-password
```

### Storage
Uploaded images are stored in `storage/app/public/`. Make sure the storage link is created.

## 📱 Responsive Breakpoints

- **Desktop:** 1200px+
- **Tablet:** 768px - 1199px
- **Mobile:** < 768px

## 🤝 Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is proprietary software for Egyptian Company for Electrical Industries.

## 📞 Contact

**Egyptian Company for Electrical Industries**
- 📍 Factory: 10th of Ramadan City, Egypt
- 📧 Email: info@eei.com.eg
- 📱 Phone: 0020 01144508585

---

Made with ❤️ for EEI
