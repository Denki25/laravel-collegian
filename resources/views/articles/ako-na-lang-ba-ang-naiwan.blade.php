@extends('layouts.share')

@section('page_title', 'Ako na lang ba ang naiwan? | CLSU Collegian')
@section('page_description', 'Masaya ang aking pagkabata, Isang makapal na librong puno ng pahina Na gabi-gabi kong ginugunita; Ngunit ang bawat kwentoâ€™y nanatili na lamang, Nakakintal sa aking mga memorya.')
@section('canonical_url', url('/article/ako-na-lang-ba-ang-naiwan?v=2'))
@section('og_title', 'Ako na lang ba ang naiwan? | CLSU Collegian')
@section('og_description', 'Masaya ang aking pagkabata, Isang makapal na librong puno ng pahina Na gabi-gabi kong ginugunita; Ngunit ang bawat kwentoâ€™y nanatili na lamang, Nakakintal sa aking mga memorya.')
@section('og_image', asset('PHOTOS/LITERARY/lit11.jpg'))
@section('og_image_alt', 'Ako na lang ba ang naiwan?')
@section('twitter_title', 'Ako na lang ba ang naiwan? | CLSU Collegian')
@section('twitter_description', 'Masaya ang aking pagkabata, Isang makapal na librong puno ng pahina Na gabi-gabi kong ginugunita; Ngunit ang bawat kwentoâ€™y nanatili na lamang, Nakakintal sa aking mga memorya.')
@section('twitter_image', asset('PHOTOS/LITERARY/lit11.jpg'))
@section('twitter_image_alt', 'Ako na lang ba ang naiwan?')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Ako na lang ba ang naiwan?</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Masaya ang aking pagkabata, Isang makapal na librong puno ng pahina Na gabi-gabi kong ginugunita; Ngunit ang bawat kwentoâ€™y nanatili na lamang, Nakakintal sa aking mga memorya.</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit11.jpg') }}" alt="Ako na lang ba ang naiwan?" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=ako-na-lang-ba-ang-naiwan') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


