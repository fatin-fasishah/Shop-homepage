# Shop Homepage

A Laravel-based shop homepage project featuring a product catalogue layout and user authentication.

## Features

- Product listing homepage with product images, names and displayed prices
- User registration with server-side validation
- User login with a remember-me option
- Authenticated session handling and logout
- Protected dashboard route for signed-in users
- SQLite database configuration by default

> **Project scope:** The current code provides a shop-style product display and authentication flow. A working shopping cart, checkout, order management and product administration are not implemented in the current routes.

## Built With

- PHP 8.3+
- Laravel 13
- Blade templates
- SQLite (default database configuration)
- Bootstrap 5 and Bootstrap Icons
- Vite, Tailwind CSS (build tooling)

## Requirements

- PHP 8.3 or newer
- Composer
- Node.js and npm
- PHP extensions required by Laravel

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/fatin-fasishah/Shop-homepage 
   cd shop-homepage
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Create your local environment file and application key:

   **Windows (PowerShell):**
   ```powershell
   Copy-Item .env.example .env
   New-Item -ItemType File -Force database/database.sqlite
   ```

   **macOS/Linux:**
   ```bash
   cp .env.example .env
   touch database/database.sqlite
   ```

   Then run:
   ```bash
   php artisan key:generate
   ```

4. Run database migrations:

   ```bash
   php artisan migrate
   ```

5. Install frontend dependencies and build assets:

   ```bash
   npm install
   npm run build
   ```

6. Start the local development server:

   ```bash
   php artisan serve
   ```

7. Open the local URL shown by Artisan (usually `http://127.0.0.1:8000`).

## Main Project Structure

```text
shop-homepage/
├── app/
│   ├── Http/Controllers/   # Authentication controller
│   └── Models/             # User model
├── bootstrap/              # Laravel bootstrap files
├── config/                 # Application configuration
├── database/
│   ├── migrations/         # Database table definitions
│   ├── factories/
│   └── seeders/
├── public/
│   ├── images/products/    # Product images
│   └── startbootstrap/     # Theme CSS, JavaScript and assets
├── resources/views/
│   ├── auth/               # Login and registration pages
│   ├── layouts/            # Shared page layout components
│   └── index.blade.php     # Shop homepage
├── routes/web.php          # Web routes
├── tests/                  # Automated tests
├── .env.example            # Safe environment configuration template
├── composer.json
└── package.json
```

## Security Notes

- `.env` is intentionally excluded. Never commit application keys, passwords, API tokens or other secrets.
- The local SQLite database is not included. Create it locally and run migrations as described above.
- `vendor/`, generated view caches and runtime logs are excluded; Composer and Laravel recreate them when needed.

## License

This project uses Laravel and the Start Bootstrap Shop Homepage template. Check the applicable upstream licenses and attribution requirements before redistributing the project or its assets.
