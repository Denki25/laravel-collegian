@extends('layouts.share')

@section('page_title', 'Bravery Beyond the Byline | CLSU Collegian')
@section('page_description', 'The newsroom is often imagined as a world of deadlines, breaking stories, and constant pressure. But for women in Philippine journalism, it is also a space of courage, resilience, and conviction.')
@section('canonical_url', url('/article/bravery-beyond-the-byline?v=2'))
@section('og_title', 'Bravery Beyond the Byline | CLSU Collegian')
@section('og_description', 'The newsroom is often imagined as a world of deadlines, breaking stories, and constant pressure. But for women in Philippine journalism, it is also a space of courage, resilience, and conviction.')
@section('og_image', asset('PHOTOS/FEATURES/feature8.jpg'))
@section('og_image_alt', 'Bravery Beyond the Byline')
@section('twitter_title', 'Bravery Beyond the Byline | CLSU Collegian')
@section('twitter_description', 'The newsroom is often imagined as a world of deadlines, breaking stories, and constant pressure. But for women in Philippine journalism, it is also a space of courage, resilience, and conviction.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature8.jpg'))
@section('twitter_image_alt', 'Bravery Beyond the Byline')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Bravery Beyond the Byline</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">The newsroom is often imagined as a world of deadlines, breaking stories, and constant pressure. But for women in Philippine journalism, it is also a space of courage, resilience, and conviction.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature8.jpg') }}" alt="Bravery Beyond the Byline" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=bravery-beyond-the-byline') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


