@extends('layouts.share')

@section('page_title', 'Hindi Guguho ang Punla ng Pangako | CLSU Collegian')
@section('page_description', 'Sa pagyapak sa maputik at makipot na taniman, Nakapunla ang pangarap na minimithi noon pa man; Mula sa pagpapatubig ng kalupaan, Hanggang sa bungang may dalang kinabukasan.')
@section('canonical_url', url('/share/hindi-guguho-ang-punla-ng-pangako.html?v=2'))
@section('og_title', 'Hindi Guguho ang Punla ng Pangako | CLSU Collegian')
@section('og_description', 'Sa pagyapak sa maputik at makipot na taniman, Nakapunla ang pangarap na minimithi noon pa man; Mula sa pagpapatubig ng kalupaan, Hanggang sa bungang may dalang kinabukasan.')
@section('og_image', asset('PHOTOS/LITERARY/lit12.jpg'))
@section('og_image_alt', 'Hindi Guguho ang Punla ng Pangako')
@section('twitter_title', 'Hindi Guguho ang Punla ng Pangako | CLSU Collegian')
@section('twitter_description', 'Sa pagyapak sa maputik at makipot na taniman, Nakapunla ang pangarap na minimithi noon pa man; Mula sa pagpapatubig ng kalupaan, Hanggang sa bungang may dalang kinabukasan.')
@section('twitter_image', asset('PHOTOS/LITERARY/lit12.jpg'))
@section('twitter_image_alt', 'Hindi Guguho ang Punla ng Pangako')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Hindi Guguho ang Punla ng Pangako</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Sa pagyapak sa maputik at makipot na taniman, Nakapunla ang pangarap na minimithi noon pa man; Mula sa pagpapatubig ng kalupaan, Hanggang sa bungang may dalang kinabukasan.</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit12.jpg') }}" alt="Hindi Guguho ang Punla ng Pangako" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=hindi-guguho-ang-punla-ng-pangako') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
