@extends('layouts.share')

@section('page_title', 'February 29n’t | CLSU Collegian')
@section('page_description', 'Staying forever young is too good to be true. Pero para sa mga leap year babies, possible ito. Hindi tumatanda—kasi bihira lang magkaroon ng birthday!')
@section('canonical_url', url('/share/february-29nt.html?v=2'))
@section('og_title', 'February 29n’t | CLSU Collegian')
@section('og_description', 'Staying forever young is too good to be true. Pero para sa mga leap year babies, possible ito. Hindi tumatanda—kasi bihira lang magkaroon ng birthday!')
@section('og_image', asset('PHOTOS/KOMIKS/komiks6.jpg'))
@section('og_image_alt', 'February 29n’t')
@section('twitter_title', 'February 29n’t | CLSU Collegian')
@section('twitter_description', 'Staying forever young is too good to be true. Pero para sa mga leap year babies, possible ito. Hindi tumatanda—kasi bihira lang magkaroon ng birthday!')
@section('twitter_image', asset('PHOTOS/KOMIKS/komiks6.jpg'))
@section('twitter_image_alt', 'February 29n’t')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">February 29n’t</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Staying forever young is too good to be true. Pero para sa mga leap year babies, possible ito. Hindi tumatanda—kasi bihira lang magkaroon ng birthday!</p>
        <img src="{{ asset('PHOTOS/KOMIKS/komiks6.jpg') }}" alt="February 29n’t" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=february-29nt') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
