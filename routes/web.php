<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::redirect('/index.html', '/', 301);
Route::redirect('/about.html', '/about', 301);
Route::redirect('/issues.html', '/issues', 301);
Route::redirect('/multimedia.html', '/multimedia', 301);
Route::redirect('/news.html', '/news', 301);
Route::redirect('/opinion.html', '/opinion', 301);
Route::redirect('/features.html', '/features', 301);
Route::redirect('/devcom.html', '/devcom', 301);
Route::redirect('/sports.html', '/sports', 301);
Route::redirect('/literary.html', '/literary', 301);
Route::redirect('/infographics.html', '/infographics', 301);
Route::redirect('/editorial.html', '/editorial', 301);
Route::redirect('/column.html', '/column', 301);

Route::get('/article.html', function (Request $request) {
    $slug = trim((string) $request->query('slug', ''));

    if ($slug !== '') {
        return redirect()->to('/article/' . ltrim($slug, '/'), 301);
    }

    return redirect()->to('/article', 301);
});

Route::get('/share/{slug}.html', function (string $slug) {
    return redirect()->to('/article/' . ltrim($slug, '/'), 301);
})->where('slug', '.*');

Route::get('/about', [PageController::class, 'about']);
Route::get('/issues', [PageController::class, 'issues']);
Route::get('/multimedia', [PageController::class, 'multimedia']);
Route::get('/article', [ArticleController::class, 'show']);
Route::get('/article/{slug}', [ArticleController::class, 'show'])->where('slug', '.*');

Route::get('/news', [SectionController::class, 'show'])->defaults('category', 'news');
Route::get('/opinion', [SectionController::class, 'show'])->defaults('category', 'opinion');
Route::get('/features', [SectionController::class, 'show'])->defaults('category', 'features');
Route::get('/devcom', [SectionController::class, 'show'])->defaults('category', 'devcom');
Route::get('/sports', [SectionController::class, 'show'])->defaults('category', 'sports');
Route::get('/literary', [SectionController::class, 'show'])->defaults('category', 'literary');
Route::get('/infographics', [SectionController::class, 'show'])->defaults('category', 'infographics');
Route::get('/editorial', [SectionController::class, 'show'])->defaults('category', 'editorial');
Route::get('/column', [SectionController::class, 'show'])->defaults('category', 'column');
