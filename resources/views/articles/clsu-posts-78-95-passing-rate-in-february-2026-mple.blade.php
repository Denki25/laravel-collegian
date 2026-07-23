@extends('layouts.share')

@section('page_title', 'CLSU posts 78.95% passing rate in February 2026 MPLE | CLSU Collegian')
@section('page_description', 'Central Luzon State University (CLSU) recorded a 78.95% passing rate in the Master Plumbers Licensure Examination (MPLE) held Feb. 19 – 20, based on the results released by the Professional Regulation Commission on Wednesday, Feb. 25.')
@section('canonical_url', url('/share/clsu-posts-78-95-passing-rate-in-february-2026-mple.html?v=2'))
@section('og_title', 'CLSU posts 78.95% passing rate in February 2026 MPLE | CLSU Collegian')
@section('og_description', 'Central Luzon State University (CLSU) recorded a 78.95% passing rate in the Master Plumbers Licensure Examination (MPLE) held Feb. 19 – 20, based on the results released by the Professional Regulation Commission on Wednesday, Feb. 25.')
@section('og_image', asset('PHOTOS/NEWS/news16.jpg'))
@section('og_image_alt', 'CLSU 2026 MPLE')
@section('twitter_title', 'CLSU posts 78.95% passing rate in February 2026 MPLE | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University (CLSU) recorded a 78.95% passing rate in the Master Plumbers Licensure Examination (MPLE) held Feb. 19 – 20, based on the results released by the Professional Regulation Commission on Wednesday, Feb. 25.')
@section('twitter_image', asset('PHOTOS/NEWS/news16.jpg'))
@section('twitter_image_alt', 'CLSU 2026 MPLE')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU posts 78.95% passing rate in February 2026 MPLE</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University (CLSU) recorded a 78.95% passing rate in the Master Plumbers Licensure Examination (MPLE) held Feb. 19 – 20, based on the results released by the Professional Regulation Commission on Wednesday, Feb. 25.</p>
        <img src="{{ asset('PHOTOS/NEWS/news16.jpg') }}" alt="CLSU 2026 MPLE" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=clsu-posts-78-95-passing-rate-in-february-2026-mple') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
