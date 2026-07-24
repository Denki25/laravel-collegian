# Static Laravel Migration Guide

This project is being migrated to Laravel as a completely static site.

## What this means

- No database.
- No models.
- No migrations.
- No seeders.
- No factories.
- No authentication or admin dashboard.
- No CMS or CRUD system.

Laravel is only being used for:

- routing
- Blade templates
- reusable layouts and partials

## What gets converted

- `index.html` becomes `resources/views/pages/home.blade.php`
- `about.html` becomes `resources/views/pages/about.blade.php`
- `news.html`, `sports.html`, `features.html`, `opinion.html`, `devcom.html`, `literary.html`, `infographics.html`, `editorial.html`, and `column.html` become Blade page files
- `multimedia.html` becomes `resources/views/pages/multimedia.blade.php`
- `issues.html` becomes `resources/views/pages/issues.blade.php`
- `article.html` becomes `resources/views/pages/article.blade.php`
- each preview page under `share/` becomes its own Blade file in `resources/views/articles/`

## Reusable structure

- `resources/views/layouts/app.blade.php` for the main site pages
- `resources/views/layouts/share.blade.php` for the article preview pages
- `resources/views/partials/header.blade.php`
- `resources/views/partials/nav.blade.php`
- `resources/views/partials/footer.blade.php`
- `resources/views/partials/breaking-ticker.blade.php`
- `resources/views/partials/section-page.blade.php`

## Assets

Keep the same asset paths by placing the files in `public/`:

- `public/style.css`
- `public/script.js`
- `public/logo.png`
- `public/data/`
- `public/PHOTOS/`
- `public/assets/fonts/`

That way the existing relative paths continue to work.

## Routes

`routes/web.php` maps the old `.html` URLs to Blade views so the site behaves the same as before.

Examples:

```php
Route::view('/', 'pages.home');
Route::view('/index.html', 'pages.home');
Route::view('/news.html', 'pages.news');
Route::view('/sports.html', 'pages.sports');
Route::view('/article.html', 'pages.article');
```

There is also a wildcard route for `share/{slug}.html` preview pages.

## How to add a new article

You only need to do two things:

1. Duplicate an existing file in `resources/views/articles/`
2. Update the article title, description, image, and canonical URL

Because the `share/{slug}.html` route is wildcard-based, you do not need to build a database entry or admin form.

If you want a dedicated page for the new article inside the main site, add one `Route::view(...)` line in `routes/web.php`.

## How to update the site after migration

- Change the page Blade file for that page.
- Update `public/style.css` if the design needs a CSS change.
- Update `public/script.js` if the JavaScript behavior needs a change.
- Add new preview files in `resources/views/articles/` when a new article is published.

## Best practice for this project

- Keep the current design.
- Keep the old `.html` URLs working.
- Let Blade handle shared structure.
- Let the existing JavaScript keep rendering the dynamic content.
- Avoid turning this into a database-driven app unless you truly need it later.

