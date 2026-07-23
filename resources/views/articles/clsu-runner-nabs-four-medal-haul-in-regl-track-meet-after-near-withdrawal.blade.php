@extends('layouts.share')

@section('page_title', 'CLSU runner nabs four-medal haul in reg’l track meet after near withdrawal | CLSU Collegian')
@section('page_description', 'Despite nearly backing out, Central Luzon State University (CLSU) track athlete Rheyan Angel Torres wiped out two golds, one silver, and one bronze in the United Central Luzon Invitational Track Meet Season 5 held at Remy Bay, Subic Bay Freeport Zone, May 30-31.')
@section('canonical_url', url('/share/clsu-runner-nabs-four-medal-haul-in-regl-track-meet-after-near-withdrawal.html?v=2'))
@section('og_title', 'CLSU runner nabs four-medal haul in reg’l track meet after near withdrawal | CLSU Collegian')
@section('og_description', 'Despite nearly backing out, Central Luzon State University (CLSU) track athlete Rheyan Angel Torres wiped out two golds, one silver, and one bronze in the United Central Luzon Invitational Track Meet Season 5 held at Remy Bay, Subic Bay Freeport Zone, May 30-31.')
@section('og_image', asset('PHOTOS/SPORTS/sports1.jpg'))
@section('og_image_alt', 'CLSU runner in action')
@section('twitter_title', 'CLSU runner nabs four-medal haul in reg’l track meet after near withdrawal | CLSU Collegian')
@section('twitter_description', 'Despite nearly backing out, Central Luzon State University (CLSU) track athlete Rheyan Angel Torres wiped out two golds, one silver, and one bronze in the United Central Luzon Invitational Track Meet Season 5 held at Remy Bay, Subic Bay Freeport Zone, May 30-31.')
@section('twitter_image', asset('PHOTOS/SPORTS/sports1.jpg'))
@section('twitter_image_alt', 'CLSU runner in action')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU runner nabs four-medal haul in reg’l track meet after near withdrawal</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Despite nearly backing out, Central Luzon State University (CLSU) track athlete Rheyan Angel Torres wiped out two golds, one silver, and one bronze in the United Central Luzon Invitational Track Meet Season 5 held at Remy Bay, Subic Bay Freeport Zone, May 30-31.</p>
        <img src="{{ asset('PHOTOS/SPORTS/sports1.jpg') }}" alt="CLSU runner in action" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=clsu-runner-nabs-four-medal-haul-in-regl-track-meet-after-near-withdrawal') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
