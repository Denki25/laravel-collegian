<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'CLSU Collegian')</title>
    <meta name="description" content="@yield('page_description', 'CLSU Collegian preview page.')">
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="@yield('canonical_url', url('/'))">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="CLSU Collegian">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('page_title')))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('page_description')))">
    <meta property="og:url" content="@yield('canonical_url', url('/'))">
    <meta property="og:image" content="@yield('og_image', asset('PHOTOS/NEWS/news3.jpg'))">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'CLSU Collegian')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('page_title')))">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('page_description')))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('PHOTOS/NEWS/news3.jpg'))">
    <meta name="twitter:image:alt" content="@yield('twitter_image_alt', 'CLSU Collegian')">
    @yield('extra_head')
</head>
<body>
    @yield('content')
</body>
</html>

