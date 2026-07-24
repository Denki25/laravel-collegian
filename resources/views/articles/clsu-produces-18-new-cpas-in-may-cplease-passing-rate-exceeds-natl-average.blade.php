@extends('layouts.share')

@section('page_title', 'CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average | CLSU Collegian')
@section('page_description', 'Central Luzon State University (CLSU) posted a 48.65% passing rate in the May 2026 Certified Public Accountant Licensure Examination (CPALE), with 18 out of 37 takers passed, surpassing the national passing rate of 30.83%.')
@section('canonical_url', url('/article/clsu-produces-18-new-cpas-in-may-cplease-passing-rate-exceeds-natl-average?v=2'))
@section('og_title', 'CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average | CLSU Collegian')
@section('og_description', 'Central Luzon State University (CLSU) posted a 48.65% passing rate in the May 2026 Certified Public Accountant Licensure Examination (CPALE), with 18 out of 37 takers passed, surpassing the national passing rate of 30.83%.')
@section('og_image', asset('PHOTOS/NEWS/news8.jpg'))
@section('og_image_alt', 'CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average')
@section('twitter_title', 'CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University (CLSU) posted a 48.65% passing rate in the May 2026 Certified Public Accountant Licensure Examination (CPALE), with 18 out of 37 takers passed, surpassing the national passing rate of 30.83%.')
@section('twitter_image', asset('PHOTOS/NEWS/news8.jpg'))
@section('twitter_image_alt', 'CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University (CLSU) posted a 48.65% passing rate in the May 2026 Certified Public Accountant Licensure Examination (CPALE), with 18 out of 37 takers passed, surpassing the national passing rate of 30.83%.</p>
        <img src="{{ asset('PHOTOS/NEWS/news8.jpg') }}" alt="CLSU produces 18 new CPAs in May CPALE, passing rate exceeds natâ€™l average" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=clsu-produces-18-new-cpas-in-may-cplease-passing-rate-exceeds-natl-average') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


