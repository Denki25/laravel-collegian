# CLSU Collegian Laravel

This is a static Laravel build of the CLSU Collegian website.

It uses Laravel only for:
- routing
- Blade templates
- reusable layouts and partials

It does not use:
- a database
- models
- migrations
- authentication
- admin panels
- CMS features

## Project Layout

- `routes/web.php` - all page routes
- `resources/views/layouts/` - master layouts
- `resources/views/partials/` - shared header, nav, footer, ticker
- `resources/views/pages/` - section pages like News, Opinion, Multimedia, Issues
- `resources/views/articles/` - one Blade file per article
- `public/` - CSS, JavaScript, images, fonts, and article data files

## How To Run

```powershell
cd C:\Users\admin\OneDrive\Desktop\collegian-laravel
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

## Run In VS Code

You can start the site from inside VS Code:

1. Open the project folder in VS Code.
2. Go to `Terminal` > `Run Task`.
3. Choose `Laravel: Serve`.
4. The site will start at `http://127.0.0.1:8000`.

Stop it with:

```text
Ctrl + C
```

The task uses XAMPP PHP directly:

```text
C:\xampp\php\php.exe
```

## How To Add A New Article

To publish a new article, do these steps:

1. Duplicate an existing file inside `resources/views/articles/`.
2. Rename the new file to the article slug, for example:
   - `new-story.blade.php`
3. Add a matching route in `routes/web.php` if the article uses its own URL.
4. Add the article content to the matching data file in `public/data/articles/`.
5. Add the article image to `public/PHOTOS/` or the correct asset folder.

## How The Article System Works

The site uses two layers:

- Blade article pages for the article itself
- JavaScript data files for homepage cards and section listings

That means:

- the article Blade file controls the full article page
- the `public/data/articles/*.js` files control what appears on the homepage and section pages

If you add a Blade article but do not add the matching data object in the JS file, the article page can still exist but it may not show up in the homepage or section listings.

## Update Flow For A New Story

When you publish a new story, update these three places:

1. `resources/views/articles/<slug>.blade.php`
2. `public/data/articles/<section>.js`
3. `routes/web.php` if the article needs a unique route

## Section Guide

- News articles go in `public/data/articles/news.js`
- Opinion articles usually go in `public/data/articles/editorial.js` or `public/data/articles/column.js`
- Features go in `public/data/articles/features.js`
- DevCom goes in `public/data/articles/devcom.js`
- Sports goes in `public/data/articles/sports.js`
- Literary goes in `public/data/articles/literary.js`
- Komiks / infographics go in `public/data/articles/komiks.js`

## Asset Guide

Put these in `public/`:

- `style.css`
- `script.js`
- `logo.png`
- `PHOTOS/`
- `assets/`
- `css/`
- `js/`
- `images/`
- `data/`

## Important Note

This project is intentionally static.

If you want to update the homepage or section listings, you usually update the article data in `public/data/articles/`, not a database.

## Quick Checklist

Before publishing a new article:

- Blade file added in `resources/views/articles/`
- Article object added to the matching `public/data/articles/*.js` file
- Image uploaded to `public/PHOTOS/` or another public asset folder
- Route added if needed
- Page checked in browser

## Fast Publish Order

Use this order every time:

1. Duplicate an existing article Blade file in `resources/views/articles/`
2. Rename it to the new slug
3. Add the matching article object to the correct `public/data/articles/*.js` file
4. Add or update the route in `routes/web.php` if needed
5. Put any new images in `public/PHOTOS/`
6. Refresh the homepage and the section page in the browser
7. Fix any broken image paths or slugs if the article does not appear
