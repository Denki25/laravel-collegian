@extends('layouts.share')

@section('page_title', 'Katapusan ng lahat-lahat | CLSU Collegian')
@section('page_description', 'Dumating na ang dapithapon, Nariyan na ang huni ng pangwakas na musika')
@section('canonical_url', url('/article/katapusan-ng-lahat-lahat?v=2'))
@section('og_title', 'Katapusan ng lahat-lahat | CLSU Collegian')
@section('og_description', 'Dumating na ang dapithapon, Nariyan na ang huni ng pangwakas na musika')
@section('og_image', asset('PHOTOS/LITERARY/lit1.jpg'))
@section('og_image_alt', 'Katapusan ng lahat-lahat feature artwork')
@section('twitter_title', 'Katapusan ng lahat-lahat | CLSU Collegian')
@section('twitter_description', 'Dumating na ang dapithapon, Nariyan na ang huni ng pangwakas na musika')
@section('twitter_image', asset('PHOTOS/LITERARY/lit1.jpg'))
@section('twitter_image_alt', 'Katapusan ng lahat-lahat feature artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Katapusan ng lahat-lahat</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Dumating na ang dapithapon, Nariyan na ang huni ng pangwakas na musika</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit1.jpg') }}" alt="Katapusan ng lahat-lahat feature artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=katapusan-ng-lahat-lahat') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


