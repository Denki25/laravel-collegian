@extends('layouts.share')

@section('page_title', 'PSA, DA urged to reconcile data on local onion production | CLSU Collegian')
@section('page_description', 'Committee on Agriculture, Food, and Agrarian Reform Chairman Sen. Francis â€œKikoâ€ Pangilinan called for an urgent harmonization of local onion production data, following discrepancies between the report of Philippine Statistics Authority (PSA) and Department of Agriculture (DA), during the Senate Hearing held at DA â€“ Philippine Carabao Center National Headquarters and Genepool, March 26.')
@section('canonical_url', url('/article/psa-da-urged-to-reconcile-data-on-local-onion-production?v=2'))
@section('og_title', 'PSA, DA urged to reconcile data on local onion production | CLSU Collegian')
@section('og_description', 'Committee on Agriculture, Food, and Agrarian Reform Chairman Sen. Francis â€œKikoâ€ Pangilinan called for an urgent harmonization of local onion production data, following discrepancies between the report of Philippine Statistics Authority (PSA) and Department of Agriculture (DA), during the Senate Hearing held at DA â€“ Philippine Carabao Center National Headquarters and Genepool, March 26.')
@section('og_image', asset('PHOTOS/NEWS/news6.jpg'))
@section('og_image_alt', 'PSA, DA urged to reconcile data on local onion production')
@section('twitter_title', 'PSA, DA urged to reconcile data on local onion production | CLSU Collegian')
@section('twitter_description', 'Committee on Agriculture, Food, and Agrarian Reform Chairman Sen. Francis â€œKikoâ€ Pangilinan called for an urgent harmonization of local onion production data, following discrepancies between the report of Philippine Statistics Authority (PSA) and Department of Agriculture (DA), during the Senate Hearing held at DA â€“ Philippine Carabao Center National Headquarters and Genepool, March 26.')
@section('twitter_image', asset('PHOTOS/NEWS/news6.jpg'))
@section('twitter_image_alt', 'PSA, DA urged to reconcile data on local onion production')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">PSA, DA urged to reconcile data on local onion production</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Committee on Agriculture, Food, and Agrarian Reform Chairman Sen. Francis â€œKikoâ€ Pangilinan called for an urgent harmonization of local onion production data, following discrepancies between the report of Philippine Statistics Authority (PSA) and Department of Agriculture (DA), during the Senate Hearing held at DA â€“ Philippine Carabao Center National Headquarters and Genepool, March 26.</p>
        <img src="{{ asset('PHOTOS/NEWS/news6.jpg') }}" alt="PSA, DA urged to reconcile data on local onion production" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=psa-da-urged-to-reconcile-data-on-local-onion-production') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


