@extends('layouts.share')

@section('page_title', 'CLSU records 31.51% pass rate in March CELE | CLSU Collegian')
@section('page_description', 'Central Luzon State University (CLSU) logged a 31.51% passing rate in the March 2026 Civil Engineering Licensure Examination (CELE), after 46 of its 146 takers passed, as per the results released by the Professional Regulation Commission on April 7.')
@section('canonical_url', url('/article/clsu-records-31-51-pass-rate-in-march-cele?v=2'))
@section('og_title', 'CLSU records 31.51% pass rate in March CELE | CLSU Collegian')
@section('og_description', 'Central Luzon State University (CLSU) logged a 31.51% passing rate in the March 2026 Civil Engineering Licensure Examination (CELE), after 46 of its 146 takers passed, as per the results released by the Professional Regulation Commission on April 7.')
@section('og_image', asset('PHOTOS/NEWS/news4.jpg'))
@section('og_image_alt', 'Civil Engineering licensure results graphic')
@section('twitter_title', 'CLSU records 31.51% pass rate in March CELE | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University (CLSU) logged a 31.51% passing rate in the March 2026 Civil Engineering Licensure Examination (CELE), after 46 of its 146 takers passed, as per the results released by the Professional Regulation Commission on April 7.')
@section('twitter_image', asset('PHOTOS/NEWS/news4.jpg'))
@section('twitter_image_alt', 'Civil Engineering licensure results graphic')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU records 31.51% pass rate in March CELE</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University (CLSU) logged a 31.51% passing rate in the March 2026 Civil Engineering Licensure Examination (CELE), after 46 of its 146 takers passed, as per the results released by the Professional Regulation Commission on April 7.</p>
        <img src="{{ asset('PHOTOS/NEWS/news4.jpg') }}" alt="Civil Engineering licensure results graphic" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=clsu-records-31-51-pass-rate-in-march-cele') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


