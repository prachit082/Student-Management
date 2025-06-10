# 🎓 Student Management - Laravel 12

A web-based Student Management System built with **Laravel 12** that allows to efficiently manage students, teachers, their details, and other records.

---

## 👥 Main Modules

- 🗂️ Student
- 🗂️ Teacher
- 🗂️ Courses
- 🗂️ Batches
- 🗂️ Enrollments
- 🗂️ Payments

---

## 🚀 Features

- ✅ Student's records CRUD
- ✅ Teacher's records CRUD
- ✅ Available courses CRUD
- ✅ Student's batches CRUD
- ✅ Student's enrollment CRUD
- ✅ Student-admission payment CRUD
- ✅ Payment receipt View & Download

---

## 🛠️ Tech Stack

- **Backend:** Laravel 12 (PHP 8.2+)
- **Frontend:** Blade / Tailwind CSS / Bootstrap (optional)
- **Database:** MySQL / SQLite
- **Authentication:** Laravel Breeze / Jetstream (optional)
- **Dev Tools:** Composer, Artisan CLI, Laravel Migrations & Seeders

---

## ⚙️ Installation

### Prerequisites

- PHP >= 8.2
- Composer
- MySQL / SQLite
- Node.js & npm (if using Laravel Mix or Vite)

### Steps

```bash
# Clone the repository
git clone https://github.com/prachit082/Student-Management.git
cd Student-Management

# Install dependencies
composer install

# Set up environment
cp .env.example .env
php artisan key:generate

# Configure your database in .env
# Then run migrations
php artisan migrate

# (Optional) Seed the database
php artisan db:seed

# Start the development server
php artisan serve
