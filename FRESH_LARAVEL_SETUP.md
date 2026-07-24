# Fresh Laravel Setup For CLSU Collegian

This guide shows how to create a brand-new Laravel project and copy the migrated static site into it.

## Prerequisites

Install these first on the target machine:

- PHP 8.2 or newer
- Composer
- Node.js and npm

If you see `composer : The term 'composer' is not recognized`, Composer is not installed yet or it is not on your PATH.

## Create a new Laravel project

In PowerShell:

```powershell
composer create-project laravel/laravel collegian-laravel
```

Then enter the project:

```powershell
cd collegian-laravel
```

## Easiest Windows Fix

If PHP and Composer are both missing, the quickest official Windows fix is to use Laravel's Windows installer command. Run PowerShell as Administrator and execute:

```powershell
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://php.new/install/windows/8.4'))
```

After it finishes:

1. Close PowerShell.
2. Open a new PowerShell window.
3. Verify the install:

```powershell
php -v
composer -V
```

If those commands work, run:

```powershell
composer create-project laravel/laravel collegian-laravel
```

If you prefer manual installation, download and run `Composer-Setup.exe` from the official Composer site, then make sure PHP is installed too.

## Copy these files from this repo

Copy the following folders and files into the new Laravel project:

- `routes/web.php`
- `app/Http/Controllers/`
- `resources/views/`
- `public/style.css`
- `public/script.js`
- `public/data/`
- `public/PHOTOS/`
- `public/assets/`
- `public/logo.png`

## What should stay in the new Laravel app

Keep the standard Laravel folders that Composer created:

- `app/`
- `bootstrap/`
- `config/`
- `database/`
- `public/index.php`
- `resources/js/`
- `resources/css/`
- `storage/`
- `vendor/`

## What you do not need

Do not add these for this migration:

- database models for content
- migrations
- seeders
- factories
- auth scaffolding
- CMS packages

## Final file layout after copying

Your new Laravel app should end up with:

```text
collegian-laravel/
├─ app/Http/Controllers/
├─ public/
│  ├─ style.css
│  ├─ script.js
│  ├─ logo.png
│  ├─ data/
│  ├─ PHOTOS/
│  └─ assets/
├─ resources/views/
├─ routes/web.php
└─ ...
```

## How to run it

After copying files:

```powershell
php artisan serve
```

Then open the local URL shown in the terminal.

## How to add a new article later

1. Duplicate one file in `resources/views/articles/`.
2. Update the article content and metadata.
3. Add a route in `routes/web.php` if you want a dedicated URL.

## Notes for this specific site

- The site is intentionally static.
- The existing CSS and JS are preserved.
- The article preview pages are Blade files, not database records.
- The old `.html` routes are kept for compatibility.

