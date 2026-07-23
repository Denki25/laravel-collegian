@extends('layouts.share')

@section('page_title', 'Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version) | CLSU Collegian')
@section('page_description', 'I stand with the belief that people can&#39;t be 100% everyday. Taliwas sa inaasahang imahe ng mga pangalang madalas tawagin sa entablado kakabit ang kani-kanilang tagumpay, may mga kwentong hindi nakikita ng mga mata.')
@section('canonical_url', url('/share/limang-hakbang-sa-likod-ng-parangal-at-papuri-peters-version.html?v=2'))
@section('og_title', 'Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version) | CLSU Collegian')
@section('og_description', 'I stand with the belief that people can&#39;t be 100% everyday. Taliwas sa inaasahang imahe ng mga pangalang madalas tawagin sa entablado kakabit ang kani-kanilang tagumpay, may mga kwentong hindi nakikita ng mga mata.')
@section('og_image', asset('PHOTOS/FEATURES/feature4.jpg'))
@section('og_image_alt', 'Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version)')
@section('twitter_title', 'Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version) | CLSU Collegian')
@section('twitter_description', 'I stand with the belief that people can&#39;t be 100% everyday. Taliwas sa inaasahang imahe ng mga pangalang madalas tawagin sa entablado kakabit ang kani-kanilang tagumpay, may mga kwentong hindi nakikita ng mga mata.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature4.jpg'))
@section('twitter_image_alt', 'Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version)')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version)</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">I stand with the belief that people can&#39;t be 100% everyday. Taliwas sa inaasahang imahe ng mga pangalang madalas tawagin sa entablado kakabit ang kani-kanilang tagumpay, may mga kwentong hindi nakikita ng mga mata.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature4.jpg') }}" alt="Limang Hakbang sa Likod ng Parangal at Papuri (Peter’s Version)" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=limang-hakbang-sa-likod-ng-parangal-at-papuri-peters-version') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
