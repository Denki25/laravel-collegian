<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/index.html', [HomeController::class, 'index']);

Route::get('/about.html', [PageController::class, 'about']);
Route::get('/issues.html', [PageController::class, 'issues']);
Route::get('/multimedia.html', [PageController::class, 'multimedia']);
Route::get('/article.html', [ArticleController::class, 'show']);

Route::get('/news.html', [SectionController::class, 'show'])->defaults('category', 'news');
Route::get('/opinion.html', [SectionController::class, 'show'])->defaults('category', 'opinion');
Route::get('/features.html', [SectionController::class, 'show'])->defaults('category', 'features');
Route::get('/devcom.html', [SectionController::class, 'show'])->defaults('category', 'devcom');
Route::get('/sports.html', [SectionController::class, 'show'])->defaults('category', 'sports');
Route::get('/literary.html', [SectionController::class, 'show'])->defaults('category', 'literary');
Route::get('/infographics.html', [SectionController::class, 'show'])->defaults('category', 'infographics');
Route::get('/editorial.html', [SectionController::class, 'show'])->defaults('category', 'editorial');
Route::get('/column.html', [SectionController::class, 'show'])->defaults('category', 'column');

Route::get('/share/{slug}.html', [ArticleController::class, 'show'])->where('slug', '.*');
