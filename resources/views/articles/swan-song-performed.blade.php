@extends('layouts.share')

@section('page_title', 'SWAN SONG PERFORMED! | CLSU Collegian')
@section('page_description', '4 graduating CLSU student-artists triumph at regâ€™l arts events.')
@section('canonical_url', url('/article/swan-song-performed?v=2'))
@section('og_title', 'SWAN SONG PERFORMED! | CLSU Collegian')
@section('og_description', '4 graduating CLSU student-artists triumph at regâ€™l arts events.')
@section('og_image', asset('PHOTOS/NEWS/news15.jpg'))
@section('og_image_alt', 'SWAN SONG PERFORMED')
@section('twitter_title', 'SWAN SONG PERFORMED! | CLSU Collegian')
@section('twitter_description', '4 graduating CLSU student-artists triumph at regâ€™l arts events.')
@section('twitter_image', asset('PHOTOS/NEWS/news15.jpg'))
@section('twitter_image_alt', 'SWAN SONG PERFORMED')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">SWAN SONG PERFORMED!</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">4 graduating CLSU student-artists triumph at regâ€™l arts events.</p>
        <img src="{{ asset('PHOTOS/NEWS/news15.jpg') }}" alt="SWAN SONG PERFORMED" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=swan-song-performed') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


