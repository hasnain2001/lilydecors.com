# 🚀 LilyDecors - Premium Home Decor & Affiliate Platform

<p align="center">
  <a href="https://lilydecors.com" target="_blank">
    <img src="public/images/lilydecors.PNG" width="800" alt="LilyDecors Banner">
  </a>
  <br>
  <strong>🎯 Live URL: </strong> <a href="https://lilydecors.com" target="_blank">https://lilydecors.com</a>
</p>

<div align="center">
  <img src="https://img.shields.io/badge/Status-Production-brightgreen" alt="Status">
  <img src="https://img.shields.io/badge/License-MIT-blue" alt="License">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4" alt="PHP">
</div>

---

## 🏆 **Platform Overview**

LilyDecors is a sophisticated multi-tier platform combining **home decor inspiration** with **smart shopping tools**. We bridge the gap between interior design enthusiasts and premium home decor retailers through curated content, verified coupons, and affiliate partnerships.

### **🎭 Three-Tier User System**

| Role | Permissions | Dashboard Features |
|------|-------------|-------------------|
| **👑 Admin** | Full system control | Analytics, user management, commission tracking |
| **👔 Employee** | Store-specific moderation | Coupon verification, store analytics |
| **👤 User** | Personalized experience | Deal recommendations, favorites, profile |

---

## ✨ **Premium Features**

### **🛍️ Smart Shopping Tools**
- **AI-Powered Coupon Matching** - Intelligent deal recommendations
- **Real-time Price Tracking** - Monitor price drops across 500+ stores
- **Wishlist Integration** - Save favorites across devices
- **One-Click Redemption** - Instant coupon application

### **📍 Store Engagement**
- **GPS Store Check-ins** - Location-based rewards
- **In-Store QR Scanning** - Physical-to-digital coupon bridging
- **Employee Verification** - Staff-validated exclusive deals
- **Regional Offers** - Location-specific promotions

### **💰 Affiliate Ecosystem**
- **Multi-tier Commission** - Earn on direct & referred sales
- **Real-time Analytics** - Track clicks, conversions, earnings
- **Automated Payouts** - Scheduled commission payments
- **Performance Dashboard** - Visualize growth metrics

### **📱 Modern UX**
- **Responsive Design** - Flawless mobile/desktop experience
- **Dark/Light Mode** - User preference optimization
- **Progressive Web App** - Installable app experience
- **Push Notifications** - Deal alerts & reminders

---

## 🛠️ **Technology Stack**

<div align="center">
  <img src="https://skillicons.dev/icons?i=laravel,php,mysql,redis,bootstrap,tailwind,alpinejs,vite,pusher&perline=9" alt="Tech Stack">
</div>

### **Backend Architecture**
- **Laravel 10** - Robust PHP framework
- **MySQL 8** - Relational database
- **Redis** - Caching & session management
- **Pusher** - Real-time notifications
- **Queue Workers** - Background job processing

### **Frontend Ecosystem**
- **Bootstrap 5** - Responsive components
- **Alpine.js** - Interactive UI elements
- **Chart.js** - Data visualization
- **Swiper.js** - Touch sliders
- **Select2** - Enhanced dropdowns

### **DevOps & Tools**
- **Docker** - Containerized development
- **GitHub Actions** - CI/CD pipelines
- **Cloudflare** - CDN & security
- **Mailgun** - Transactional emails
- **Google Maps API** - Location services

---

## 🎨 **Visual Showcase**

<div align="center">
  <h3>✨ Platform Interfaces</h3>
  
  ### **Admin Dashboard**
  <img src="public/images/admin.PNG" width="800" alt="Admin Dashboard">
  *<small>Complete analytics, user management, and system control</small>*
  
  ### **User Experience**
  <img src="public/images/user.PNG" width="800" alt="User Interface">
  *<small>Personalized deals, favorites, and shopping tools</small>*
  
  ### **Employee Portal**
  <img src="public/images/employee.PNG" width="800" alt="Employee Portal">
  *<small>Store management, coupon verification, and analytics</small>*
</div>

---

## 🚀 **Quick Start Guide**

### **Prerequisites**
- PHP 8.2+
- MySQL 8.0+
- Composer 2.5+
- Node.js 18+
- Redis 7.0+

### **Step 1: Clone & Setup**
```bash
# Clone repository
git clone https://github.com/yourusername/lilydecors.com.git
cd lilydecors.com

# Install PHP dependencies
composer install --no-dev --optimize-autoloader

# Install JavaScript dependencies
npm install
npm run build

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Edit .env file with your details
DB_DATABASE=lilydecors
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_pass

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=mt1

MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your_domain
MAILGUN_SECRET=your_secret


# Run migrations with seeders
php artisan migrate --seed

# Create storage link
php artisan storage:link

# Cache configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache

lilydecors.com/
├── README.md
├── .env.example
├── .gitignore
├── composer.json
├── package.json
├── artisan
├── public/
│   ├── index.php
│   ├── .htaccess
│   ├── images/
│   │   ├── lilydecors.PNG
│   │   ├── admin.PNG
│   │   ├── user.PNG
│   │   └── employee.PNG
│   ├── css/
│   ├── js/
│   └── uploads/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   ├── Employee/
│   │   │   ├── User/
│   │   │   └── Auth/
│   │   ├── Middleware/
│   │   └── Kernel.php
│   ├── Models/
│   ├── Providers/
│   └── Services/
├── config/
├── database/
│   ├── migrations/
│   ├── seeders/
│   └── factories/
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   ├── admin/
│   │   ├── employee/
│   │   ├── user/
│   │   └── auth/
│   ├── lang/
│   └── js/
├── routes/
│   ├── web.php
│   ├── api.php
│   ├── admin.php
│   └── employee.php
├── storage/
├── tests/
└── vendor/