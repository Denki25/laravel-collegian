<?php

namespace App\Http\Controllers;

class SectionController extends Controller
{
    public function show(string $category)
    {
        $view = strtolower($category);

        $allowed = [
            'news',
            'opinion',
            'features',
            'devcom',
            'sports',
            'literary',
            'infographics',
            'editorial',
            'column',
        ];

        abort_unless(in_array($view, $allowed, true), 404);

        return view("pages.{$view}");
    }
}

