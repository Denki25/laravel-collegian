<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function show(string $slug = null)
    {
        if (!$slug) {
            return view('pages.article');
        }

        $slug = Str::slug(rawurldecode($slug));
        $view = "articles.{$slug}";

        abort_unless(view()->exists($view), 404);

        return view($view);
    }
}

