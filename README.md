# Laravel EasyCRM

A lightweight CRM system built using Laravel.

## Features
✅ User Authentication (Laravel Breeze)  
✅ Role-based Access Control  
✅ REST API for managing users & products  
✅ MySQL Database Integration  
✅ Secure Middleware Authentication  

## Installation

```bash
git clone https://github.com/Jarri-24-7/Laravel-EasyCRM.git
cd Laravel-EasyCRM
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
