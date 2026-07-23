@extends('layouts.share')

@section('page_title', '3 CLSU Educ grads top 2026 LEPT; both levels surpass nat’l passing | CLSU Collegian')
@section('page_description', 'Central Luzon State University (CLSU) alumni secured three topnotcher positions in the March 2026 Licensure Examination for Professional Teachers (LEPT), posting institutional passing rates above the national average in both elementary and secondary levels.')
@section('canonical_url', url('/share/3-clsu-educ-grads-top-2026-lept-both-levels-surpass-natl-passing.html?v=2'))
@section('og_title', '3 CLSU Educ grads top 2026 LEPT; both levels surpass nat’l passing | CLSU Collegian')
@section('og_description', 'Central Luzon State University (CLSU) alumni secured three topnotcher positions in the March 2026 Licensure Examination for Professional Teachers (LEPT), posting institutional passing rates above the national average in both elementary and secondary levels.')
@section('og_image', asset('PHOTOS/NEWS/news7.jpg'))
@section('og_image_alt', 'LEPT topnotchers')
@section('twitter_title', '3 CLSU Educ grads top 2026 LEPT; both levels surpass nat’l passing | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University (CLSU) alumni secured three topnotcher positions in the March 2026 Licensure Examination for Professional Teachers (LEPT), posting institutional passing rates above the national average in both elementary and secondary levels.')
@section('twitter_image', asset('PHOTOS/NEWS/news7.jpg'))
@section('twitter_image_alt', 'LEPT topnotchers')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">3 CLSU Educ grads top 2026 LEPT; both levels surpass nat’l passing</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University (CLSU) alumni secured three topnotcher positions in the March 2026 Licensure Examination for Professional Teachers (LEPT), posting institutional passing rates above the national average in both elementary and secondary levels.</p>
        <img src="{{ asset('PHOTOS/NEWS/news7.jpg') }}" alt="LEPT topnotchers" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=3-clsu-educ-grads-top-2026-lept-both-levels-surpass-natl-passing') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
