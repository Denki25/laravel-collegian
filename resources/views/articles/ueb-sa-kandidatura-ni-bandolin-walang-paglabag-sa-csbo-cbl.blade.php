@extends('layouts.share')

@section('page_title', 'UEB sa kandidatura ni Bandolin: Walang paglabag sa CSBO-CBL | CLSU Collegian')
@section('page_description', 'Pinayagan ng University Electoral Board (UEB) ang pagtakbo ni Vice Chairperson-candidate Queen Stefanie Bandolin batay sa mga kwalipikasyon na nakasaad sa Collegiate Student Body Organization-Constitution and Bylaws (CSBO-CBL), base sa inilabas ng lupon na Resolution No. 001, s. 2026 noong Marso 31.')
@section('canonical_url', url('/share/ueb-sa-kandidatura-ni-bandolin-walang-paglabag-sa-csbo-cbl.html?v=2'))
@section('og_title', 'UEB sa kandidatura ni Bandolin: Walang paglabag sa CSBO-CBL | CLSU Collegian')
@section('og_description', 'Pinayagan ng University Electoral Board (UEB) ang pagtakbo ni Vice Chairperson-candidate Queen Stefanie Bandolin batay sa mga kwalipikasyon na nakasaad sa Collegiate Student Body Organization-Constitution and Bylaws (CSBO-CBL), base sa inilabas ng lupon na Resolution No. 001, s. 2026 noong Marso 31.')
@section('og_image', asset('PHOTOS/NEWS/news5.jpg'))
@section('og_image_alt', 'UEB Resolution No. 001, s. 2026')
@section('twitter_title', 'UEB sa kandidatura ni Bandolin: Walang paglabag sa CSBO-CBL | CLSU Collegian')
@section('twitter_description', 'Pinayagan ng University Electoral Board (UEB) ang pagtakbo ni Vice Chairperson-candidate Queen Stefanie Bandolin batay sa mga kwalipikasyon na nakasaad sa Collegiate Student Body Organization-Constitution and Bylaws (CSBO-CBL), base sa inilabas ng lupon na Resolution No. 001, s. 2026 noong Marso 31.')
@section('twitter_image', asset('PHOTOS/NEWS/news5.jpg'))
@section('twitter_image_alt', 'UEB Resolution No. 001, s. 2026')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">UEB sa kandidatura ni Bandolin: Walang paglabag sa CSBO-CBL</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Pinayagan ng University Electoral Board (UEB) ang pagtakbo ni Vice Chairperson-candidate Queen Stefanie Bandolin batay sa mga kwalipikasyon na nakasaad sa Collegiate Student Body Organization-Constitution and Bylaws (CSBO-CBL), base sa inilabas ng lupon na Resolution No. 001, s. 2026 noong Marso 31.</p>
        <img src="{{ asset('PHOTOS/NEWS/news5.jpg') }}" alt="UEB Resolution No. 001, s. 2026" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=ueb-sa-kandidatura-ni-bandolin-walang-paglabag-sa-csbo-cbl') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
