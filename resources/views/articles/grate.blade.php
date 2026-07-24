@extends('layouts.share')

@section('page_title', 'grATE | CLSU Collegian')
@section('page_description', 'Was it not enough? I ask myself over and over and over again. All while staring at numbers measuring my effortsâ€” the nights I chose textbooks over sleep, where caffeine became my best friend, times when I missed family days...')
@section('canonical_url', url('/article/grate?v=2'))
@section('og_title', 'grATE | CLSU Collegian')
@section('og_description', 'Was it not enough? I ask myself over and over and over again. All while staring at numbers measuring my effortsâ€” the nights I chose textbooks over sleep, where caffeine became my best friend, times when I missed family days...')
@section('og_image', asset('PHOTOS/LITERARY/lit7.jpg'))
@section('og_image_alt', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork')
@section('twitter_title', 'grATE | CLSU Collegian')
@section('twitter_description', 'Was it not enough? I ask myself over and over and over again. All while staring at numbers measuring my effortsâ€” the nights I chose textbooks over sleep, where caffeine became my best friend, times when I missed family days...')
@section('twitter_image', asset('PHOTOS/LITERARY/lit7.jpg'))
@section('twitter_image_alt', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">grATE</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Was it not enough? I ask myself over and over and over again. All while staring at numbers measuring my effortsâ€” the nights I chose textbooks over sleep, where caffeine became my best friend, times when I missed family days...</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit7.jpg') }}" alt="Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=grate') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


