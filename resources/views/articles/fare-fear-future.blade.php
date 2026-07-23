@extends('layouts.share')

@section('page_title', 'Fare, Fear, Future | CLSU Collegian')
@section('page_description', 'She held the morning like something fragile.  Not in her hands, but in her chest—where decisions are weighed without noise, where hope and hesitation sit side by side like strangers forced into the same small room. The brown envelope rested on her lap, worn at the corners.')
@section('canonical_url', url('/share/fare-fear-future.html?v=2'))
@section('og_title', 'Fare, Fear, Future | CLSU Collegian')
@section('og_description', 'She held the morning like something fragile.  Not in her hands, but in her chest—where decisions are weighed without noise, where hope and hesitation sit side by side like strangers forced into the same small room. The brown envelope rested on her lap, worn at the corners.')
@section('og_image', asset('PHOTOS/NEWS/news3.jpg'))
@section('og_image_alt', 'Fare, Fear, Future')
@section('twitter_title', 'Fare, Fear, Future | CLSU Collegian')
@section('twitter_description', 'She held the morning like something fragile.  Not in her hands, but in her chest—where decisions are weighed without noise, where hope and hesitation sit side by side like strangers forced into the same small room. The brown envelope rested on her lap, worn at the corners.')
@section('twitter_image', asset('PHOTOS/NEWS/news3.jpg'))
@section('twitter_image_alt', 'Fare, Fear, Future')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Fare, Fear, Future</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">She held the morning like something fragile.  Not in her hands, but in her chest—where decisions are weighed without noise, where hope and hesitation sit side by side like strangers forced into the same small room. The brown envelope rested on her lap, worn at the corners.</p>
        <img src="{{ asset('PHOTOS/NEWS/news3.jpg') }}" alt="Fare, Fear, Future" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=fare-fear-future') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
