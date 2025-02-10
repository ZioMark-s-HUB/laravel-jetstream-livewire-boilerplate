<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Jetstream + Livewire Boilerplate

A simple boilerplate for Laravel Jetstream with Livewire, providing a slightly enhanced starting point with some pre-configured features.

## Features

✅ **Dark Mode Toggle** – A built-in switcher for dark mode, which Jetstream doesn’t include by default.  
✅ **User Avatars Enabled** – Avatar support is pre-configured, saving you the extra setup step.  
✅ **Email Verification via SMTP** – Already set up for verified user authentication.  

## Who Is This For?

This boilerplate is **ideal for beginners** who want to avoid spending time on initial configuration. Instead of digging through documentation to enable these basic features, you can start coding right away with a more user-friendly setup.

## Installation

1. **Clone the repository**  
   ```bash
   git clone https://github.com/ZioMark-s-HUB/laravel-jetstream-livewire-boilerplate.git
   cd laravel-jetstream-livewire-boilerplate
   ```

2. **Install dependencies**  
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Set up environment variables**  
   Copy `.env.example` to `.env` and update database and mail settings:  
   ```bash
   cp .env.example .env
   ```

4. **Generate application key**  
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**  
   ```bash
   php artisan migrate
   ```

6. **Serve the application**  
   ```bash
   php artisan serve
   ```

## Configuration

- **Dark Mode Toggle**: The UI includes a switcher to enable/disable dark mode.
- **Avatars**: User avatar functionality is already enabled.
- **Email Verification**: Make sure to configure your `.env` file with SMTP credentials.

## Contributing

Feel free to fork this repository and submit pull requests with improvements!

## License

This project is open-source and available under the [MIT License](LICENSE).
