# Laravel Role & Permission Management System

A Laravel-based Role and Permission Management System that allows administrators to manage users, roles, and permissions securely using the Spatie Laravel Permission package.

## 🚀 Features

- User Authentication
- Role Management (Create, Update, Delete)
- Permission Management
- Assign Roles to Users
- Assign Permissions to Roles
- Role-based Access Control (RBAC)
- Middleware Protection
- Responsive Admin Interface

## 🛠️ Technologies Used

- Laravel
- PHP
- MySQL
- Bootstrap
- Spatie Laravel Permission
- HTML
- CSS
- JavaScript

## 📦 Installation

### Clone the repository

```bash
git clone https://github.com/your-username/role-permission-system.git
```

### Go to project directory

```bash
cd role-permission-system
```

### Install dependencies

```bash
composer install
```

```bash
npm install
```

### Copy environment file

```bash
cp .env.example .env
```

### Generate application key

```bash
php artisan key:generate
```

### Configure database

Update your `.env` file:

```env
DB_DATABASE=your_database
DB_USERNAME=root
DB_PASSWORD=
```

### Run migrations

```bash
php artisan migrate
```

### Seed roles and permissions (if available)

```bash
php artisan db:seed
```

### Run the project

```bash
php artisan serve
```

Open:

```
http://127.0.0.1:8000
```

## 📁 Project Structure

```
app/
routes/
resources/
database/
public/
```

## 📸 Screenshots

Add screenshots of:

- Login Page
- Dashboard
- User Management
- Role Management
- Permission Management

## 📚 Package Used

- Spatie Laravel Permission

## 👩‍💻 Author

**Samra Azhar**

- GitHub: https://github.com/samraak

## 📄 License

This project is created for learning and portfolio purposes.
