<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title', 'CLSU Collegian')</title>
    <meta name="description" content="@yield('page_description', 'Official student publication of Central Luzon State University featuring news, features, opinion, sports, literary, multimedia, and archives.')">
    <link rel="canonical" href="@yield('canonical_url', url('/'))">
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="CLSU Collegian">
    <meta property="og:title" content="@yield('og_title', trim($__env->yieldContent('page_title')))">
    <meta property="og:description" content="@yield('og_description', trim($__env->yieldContent('page_description')))">
    <meta property="og:url" content="@yield('canonical_url', url('/'))">
    <meta property="og:image" content="@yield('og_image', asset('PHOTOS/NEWS/news3.jpg'))">
    <meta property="og:image:secure_url" content="@yield('og_image', asset('PHOTOS/NEWS/news3.jpg'))">
    <meta property="og:image:alt" content="@yield('og_image_alt', 'Campus students inside a classroom at Central Luzon State University')">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', trim($__env->yieldContent('page_title')))">
    <meta name="twitter:description" content="@yield('twitter_description', trim($__env->yieldContent('page_description')))">
    <meta name="twitter:image" content="@yield('twitter_image', asset('PHOTOS/NEWS/news3.jpg'))">
    <meta name="twitter:image:alt" content="@yield('twitter_image_alt', 'Campus students inside a classroom at Central Luzon State University')">
    @yield('extra_head')
    @php
        $assetVersioned = function (string $path): string {
            $fullPath = public_path($path);
            $version = is_file($fullPath) ? filemtime($fullPath) : time();

            return asset($path) . '?v=' . $version;
        };
    @endphp
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;800&family=Noto+Serif:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ $assetVersioned('style.css') }}">
</head>
@php
    $bodyAttributes = html_entity_decode(trim($__env->yieldContent('body_attributes')), ENT_QUOTES, 'UTF-8');
    $bodyClass = trim($__env->yieldContent('body_class'));
    $bodyAttributesHtml = $bodyAttributes ? ' ' . $bodyAttributes : '';
    $bodyClassHtml = $bodyClass ? ' class="' . e($bodyClass) . '"' : '';
@endphp
<body{!! $bodyAttributesHtml !!}{!! $bodyClassHtml !!}>
    @yield('preheader')
    @include('partials.header')
    @yield('content')
    @include('partials.footer')

    <script src="{{ $assetVersioned('data/site-config.js') }}"></script>
    <script src="{{ $assetVersioned('data/issues.js') }}"></script>
    <script src="{{ $assetVersioned('data/multimedia.js') }}"></script>
    @include('partials.statamic-articles')
    <script src="{{ $assetVersioned('script.js') }}"></script>
</body>
</html>
