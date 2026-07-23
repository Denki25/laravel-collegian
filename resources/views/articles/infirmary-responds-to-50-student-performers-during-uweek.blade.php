@extends('layouts.share')

@section('page_title', 'Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel | CLSU Collegian')
@section('page_description', 'Suspendido ang nakatakdang pagtaas ng pamasahe sa mga pampasaherong sasakyan matapos kanselahin ni Pangulong Ferdinand Marcos Jr. ang nasabing implementasyon nitong Miyerkules, Mar. 18, isang araw bago sana ito ipatupad.')
@section('canonical_url', url('/share/infirmary-responds-to-50-student-performers-during-uweek.html?v=2'))
@section('og_title', 'Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel | CLSU Collegian')
@section('og_description', 'Suspendido ang nakatakdang pagtaas ng pamasahe sa mga pampasaherong sasakyan matapos kanselahin ni Pangulong Ferdinand Marcos Jr. ang nasabing implementasyon nitong Miyerkules, Mar. 18, isang araw bago sana ito ipatupad.')
@section('og_image', asset('PHOTOS/NEWS/news12.jpg'))
@section('og_image_alt', 'Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel')
@section('twitter_title', 'Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel | CLSU Collegian')
@section('twitter_description', 'Suspendido ang nakatakdang pagtaas ng pamasahe sa mga pampasaherong sasakyan matapos kanselahin ni Pangulong Ferdinand Marcos Jr. ang nasabing implementasyon nitong Miyerkules, Mar. 18, isang araw bago sana ito ipatupad.')
@section('twitter_image', asset('PHOTOS/NEWS/news12.jpg'))
@section('twitter_image_alt', 'Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Suspendido ang nakatakdang pagtaas ng pamasahe sa mga pampasaherong sasakyan matapos kanselahin ni Pangulong Ferdinand Marcos Jr. ang nasabing implementasyon nitong Miyerkules, Mar. 18, isang araw bago sana ito ipatupad.</p>
        <img src="{{ asset('PHOTOS/NEWS/news12.jpg') }}" alt="Fare hike kanselado; mga tsuper umaaray sa presyo ng diesel" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=infirmary-responds-to-50-student-performers-during-uweek') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
