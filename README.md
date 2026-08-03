# Commercial Landing Page

[![Laravel Version](https://img.shields.io/badge/Laravel-v10%2Fv11-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

A high-converting, responsive landing page built for a real-world client, optimized for speed, SEO, and seamless user experience. 

---

## Live Demo

Check out the live production version here: [https://your-client-domain.com](https://your-client-domain.com)

---

## Key Features

* **Fully Responsive Design:** Optimized for desktop, tablet, and mobile devices.
* **Lead Capture & Contact Form:** Asynchronous and validated form submission handling.
* **SEO & Performance Optimized:** Clean semantic HTML5, optimized assets, and meta tags for search engines.
* **Modular Codebase:** Clean separation of concerns built on top of Laravel MVC architecture.

---

## 🛠️ Tech Stack

* **Front-end:** HTML5, CSS3, JavaScript (ES6+)
* **Back-end:** PHP 8.2+, Laravel Framework
* **Database:** MySQL
* **Deployment & Hosting:** Shared Web Hosting (HostGator cPanel environment)

---

## Project Architecture

```
├── app/                  # Application core logic (Controllers, Models, Requests)
├── config/               # Environment & framework configuration
├── database/             # Migrations and seeders
├── public/               # Publicly accessible assets (CSS, JS, Images)
└── resources/
    ├── views/            # Blade templates for UI components
    ├── js/               # Scripts for frontend aplications
    └── css/              # Styles
```

---

## Getting Started Locally

To run a copy of this project on your local machine for development/testing, follow these steps:

### Prerequisites

* PHP >= 8.2
* Composer
* Node.js & npm (if assets compilation is required)
* MySQL / MariaDB

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/client-landing-page-laravel.git
   cd client-landing-page-laravel
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Environment Configuration:**
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Set up Database Credentials:**
   Update the `.env` file with your local database settings:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_db_name
   DB_USERNAME=your_db_user
   DB_PASSWORD=your_db_password
   ```

6. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Start the local server:**
   ```bash
   php artisan serve
   ```
   Visit `http://127.0.0.1:8000` in your browser.

---

## Deployment Notes (HostGator / Shared Hosting)

This project is optimized to run smoothly on standard cPanel shared hosting environments with PHP 8.x and MySQL support. 

Key steps for deployment:
* Configure public document root pointing to the `public/` folder (or via `.htaccess` redirection).
* Set environment variables safely in the production `.env`.
* Execute `php artisan config:cache` and `php artisan route:cache` for enhanced performance.

---

## License

This project is open-source software licensed under the [MIT License](LICENSE).
