@extends('layouts.share')

@section('page_title', 'Pabitin na Pabitin | CLSU Collegian')
@section('page_description', 'Yung nakapag-samgyup na mga tropa mo tapos ikaw nasa “this form is no longer accepting responses” pa rin… Aray ko.')
@section('canonical_url', url('/share/pabitin-na-pabitin.html?v=2'))
@section('og_title', 'Pabitin na Pabitin | CLSU Collegian')
@section('og_description', 'Yung nakapag-samgyup na mga tropa mo tapos ikaw nasa “this form is no longer accepting responses” pa rin… Aray ko.')
@section('og_image', asset('PHOTOS/KOMIKS/komiks5.jpg'))
@section('og_image_alt', 'Pabitin na Pabitin')
@section('twitter_title', 'Pabitin na Pabitin | CLSU Collegian')
@section('twitter_description', 'Yung nakapag-samgyup na mga tropa mo tapos ikaw nasa “this form is no longer accepting responses” pa rin… Aray ko.')
@section('twitter_image', asset('PHOTOS/KOMIKS/komiks5.jpg'))
@section('twitter_image_alt', 'Pabitin na Pabitin')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Pabitin na Pabitin</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Yung nakapag-samgyup na mga tropa mo tapos ikaw nasa “this form is no longer accepting responses” pa rin… Aray ko.</p>
        <img src="{{ asset('PHOTOS/KOMIKS/komiks5.jpg') }}" alt="Pabitin na Pabitin" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=pabitin-na-pabitin') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
