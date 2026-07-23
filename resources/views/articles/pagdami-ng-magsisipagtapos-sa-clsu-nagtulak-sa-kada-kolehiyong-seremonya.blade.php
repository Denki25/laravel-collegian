@extends('layouts.share')

@section('page_title', 'Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya | CLSU Collegian')
@section('page_description', 'Isasagawa na kada kolehiyo ang nakagawiang &#39;mass graduation’ dahil sa mataas na bilang ng mga magsisipagtapos sa ika-74 Taunang Seremonya ng Pagtatapos ng Central Luzon State University (CLSU).')
@section('canonical_url', url('/share/pagdami-ng-magsisipagtapos-sa-clsu-nagtulak-sa-kada-kolehiyong-seremonya.html?v=2'))
@section('og_title', 'Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya | CLSU Collegian')
@section('og_description', 'Isasagawa na kada kolehiyo ang nakagawiang &#39;mass graduation’ dahil sa mataas na bilang ng mga magsisipagtapos sa ika-74 Taunang Seremonya ng Pagtatapos ng Central Luzon State University (CLSU).')
@section('og_image', asset('PHOTOS/NEWS/news10.jpg'))
@section('og_image_alt', 'Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya')
@section('twitter_title', 'Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya | CLSU Collegian')
@section('twitter_description', 'Isasagawa na kada kolehiyo ang nakagawiang &#39;mass graduation’ dahil sa mataas na bilang ng mga magsisipagtapos sa ika-74 Taunang Seremonya ng Pagtatapos ng Central Luzon State University (CLSU).')
@section('twitter_image', asset('PHOTOS/NEWS/news10.jpg'))
@section('twitter_image_alt', 'Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Isasagawa na kada kolehiyo ang nakagawiang &#39;mass graduation’ dahil sa mataas na bilang ng mga magsisipagtapos sa ika-74 Taunang Seremonya ng Pagtatapos ng Central Luzon State University (CLSU).</p>
        <img src="{{ asset('PHOTOS/NEWS/news10.jpg') }}" alt="Pagdami ng magsisipagtapos sa CLSU, nagtulak sa kada kolehiyong seremonya" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=pagdami-ng-magsisipagtapos-sa-clsu-nagtulak-sa-kada-kolehiyong-seremonya') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
