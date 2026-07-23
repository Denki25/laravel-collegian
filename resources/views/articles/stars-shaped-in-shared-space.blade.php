@extends('layouts.share')

@section('page_title', 'Stars Shaped in Shared Space | CLSU Collegian')
@section('page_description', 'ExDRAGvaganza became a shared space where identity was not only performed on stage, but recognized, affirmed, and reflected back through every movement, silence, and applause.')
@section('canonical_url', url('/share/stars-shaped-in-shared-space.html?v=2'))
@section('og_title', 'Stars Shaped in Shared Space | CLSU Collegian')
@section('og_description', 'ExDRAGvaganza became a shared space where identity was not only performed on stage, but recognized, affirmed, and reflected back through every movement, silence, and applause.')
@section('og_image', asset('PHOTOS/FEATURES/feature.jpg.jpg'))
@section('og_image_alt', 'Stars Shaped in Shared Space feature artwork')
@section('twitter_title', 'Stars Shaped in Shared Space | CLSU Collegian')
@section('twitter_description', 'ExDRAGvaganza became a shared space where identity was not only performed on stage, but recognized, affirmed, and reflected back through every movement, silence, and applause.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature.jpg.jpg'))
@section('twitter_image_alt', 'Stars Shaped in Shared Space feature artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Stars Shaped in Shared Space</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">ExDRAGvaganza became a shared space where identity was not only performed on stage, but recognized, affirmed, and reflected back through every movement, silence, and applause.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature.jpg.jpg') }}" alt="Stars Shaped in Shared Space feature artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=stars-shaped-in-shared-space') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
