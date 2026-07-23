<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function issues()
    {
        return view('pages.issues');
    }

    public function multimedia()
    {
        return view('pages.multimedia');
    }
}

