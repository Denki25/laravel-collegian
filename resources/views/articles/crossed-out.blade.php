@extends('layouts.share')

@section('page_title', 'Crossed Out | CLSU Collegian')
@section('page_description', 'A day after April 8. Exams are finally over.')
@section('canonical_url', url('/article/crossed-out?v=2'))
@section('og_title', 'Crossed Out | CLSU Collegian')
@section('og_description', 'A day after April 8. Exams are finally over.')
@section('og_image', asset('PHOTOS/FEATURES/feature3.jpg'))
@section('og_image_alt', 'Crossed Out feature artwork')
@section('twitter_title', 'Crossed Out | CLSU Collegian')
@section('twitter_description', 'A day after April 8. Exams are finally over.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature3.jpg'))
@section('twitter_image_alt', 'Crossed Out feature artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Crossed Out</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">A day after April 8. Exams are finally over.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature3.jpg') }}" alt="Crossed Out feature artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=crossed-out') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


