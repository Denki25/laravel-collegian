@extends('layouts.share')

@section('page_title', 'CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander | CLSU Collegian')
@section('page_description', 'Central Luzon State University-Reserve Officers&#39; Training Corps (CLSU-ROTC), led by Anabelle Cabanilla as its first female corps commander, garnered a 98.39% rating in the Regional Annual Administrative Tactical Inspection (RAATI) held at the CLSU Athletic Grounds on April 13.')
@section('canonical_url', url('/article/clsu-rotc-earns-excellent-mark-in-raati-under-first-female-corps-commander?v=2'))
@section('og_title', 'CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander | CLSU Collegian')
@section('og_description', 'Central Luzon State University-Reserve Officers&#39; Training Corps (CLSU-ROTC), led by Anabelle Cabanilla as its first female corps commander, garnered a 98.39% rating in the Regional Annual Administrative Tactical Inspection (RAATI) held at the CLSU Athletic Grounds on April 13.')
@section('og_image', asset('PHOTOS/NEWS/news3.jpg'))
@section('og_image_alt', 'CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander')
@section('twitter_title', 'CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University-Reserve Officers&#39; Training Corps (CLSU-ROTC), led by Anabelle Cabanilla as its first female corps commander, garnered a 98.39% rating in the Regional Annual Administrative Tactical Inspection (RAATI) held at the CLSU Athletic Grounds on April 13.')
@section('twitter_image', asset('PHOTOS/NEWS/news3.jpg'))
@section('twitter_image_alt', 'CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University-Reserve Officers&#39; Training Corps (CLSU-ROTC), led by Anabelle Cabanilla as its first female corps commander, garnered a 98.39% rating in the Regional Annual Administrative Tactical Inspection (RAATI) held at the CLSU Athletic Grounds on April 13.</p>
        <img src="{{ asset('PHOTOS/NEWS/news3.jpg') }}" alt="CLSU-ROTC earns â€˜excellentâ€™ mark in RAATI under first female corps commander" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=clsu-rotc-earns-excellent-mark-in-raati-under-first-female-corps-commander') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


