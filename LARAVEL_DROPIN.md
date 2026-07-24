# Laravel Drop-In Package

This repository now contains the Blade views, routes, controllers, and static assets needed for a Laravel migration.

## What is already in place

- `routes/web.php`
- `app/Http/Controllers/`
- `resources/views/layouts/`
- `resources/views/partials/`
- `resources/views/pages/`
- `resources/views/articles/`
- `public/style.css`
- `public/script.js`
- `public/data/`
- `public/PHOTOS/`
- `public/assets/`

## What you still need in a real Laravel app

This workspace does not include the Laravel framework itself.

To make it runnable, copy these project pieces into a fresh Laravel installation:

- `routes/web.php`
- `app/Http/Controllers/*.php`
- `resources/views/**`
- `public/style.css`
- `public/script.js`
- `public/data/**`
- `public/PHOTOS/**`
- `public/assets/**`

## Recommended fresh Laravel install steps

1. Create a new Laravel project.
2. Replace the new project’s `routes/web.php` with the one in this repo.
3. Copy the controller files into `app/Http/Controllers/`.
4. Copy the Blade views into `resources/views/`.
5. Copy the static assets into `public/`.
6. Run the Laravel app normally.

## Adding a new article

1. Duplicate an existing file in `resources/views/articles/`.
2. Update the article title, description, image, and link.
3. If you want a dedicated route, add a new route in `routes/web.php`.

## Important note

This is a static Laravel migration only.
It intentionally avoids:

- databases
- models
- migrations
- seeders
- factories
- auth
- CMS features

