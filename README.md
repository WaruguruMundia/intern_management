# Intern Management Mini App

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

## About the Project

A mini application to manage interns, mentors, and HODs. Built using PHP and Laravel.<br>
It was started to understand the MVC structure of Laravel, and Blade's incorporation in HTML code.

## Features
- User registration and authentication (interns, HOD's, mentors)
- Profile management
- Department and university tracking
- Internship start and end dates
- Role-based access control


## Installation
NB: Commands are for Git Bash terminal use

1. Clone the repository:
   ```bash
   git clone https://github.com/

2. Navigate into the project:
   ```bash
   cd intern_management

3. Install dependencies:
    ```bash
    composer install
    npm install

4. Copy .env.example to .env and configure your database
    ```bash
    cp .env.example .env

5. Generate the app key:
   ```bash
   php artisan key:generate

6. Run migrations:
   ```bash
   php artisan migrate
7. Usage:
- Start the local server:
    ```bash
      php artisan serve
- Visit http://localhost:8000 in your browser.

## Licence
This project is licenced under the MIT <a href = "(https://opensource.org/license/mit)">Licence</a>. 





