@extends('layouts.share')

@section('page_title', 'May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka | CLSU Collegian')
@section('page_description', 'Like water, the flow of time never stops. It moves forward, constant and unyielding. So in the midst of the digital age where our attention spans seek instant gratification, one institution refuses to be rushed.')
@section('canonical_url', url('/share/may-kasaysayan-ang-sarili-at-pag-ibig-ang-pinilakang-tabing-ni-ricky-lee-at-ang-pagbasa-bilang-pakikibaka.html?v=2'))
@section('og_title', 'May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka | CLSU Collegian')
@section('og_description', 'Like water, the flow of time never stops. It moves forward, constant and unyielding. So in the midst of the digital age where our attention spans seek instant gratification, one institution refuses to be rushed.')
@section('og_image', asset('PHOTOS/FEATURES/feature6.jpg'))
@section('og_image_alt', 'May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka')
@section('twitter_title', 'May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka | CLSU Collegian')
@section('twitter_description', 'Like water, the flow of time never stops. It moves forward, constant and unyielding. So in the midst of the digital age where our attention spans seek instant gratification, one institution refuses to be rushed.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature6.jpg'))
@section('twitter_image_alt', 'May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Like water, the flow of time never stops. It moves forward, constant and unyielding. So in the midst of the digital age where our attention spans seek instant gratification, one institution refuses to be rushed.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature6.jpg') }}" alt="May Kasaysayan ang Sarili at Pag-ibig: Ang Pinilakang Tabing ni Ricky Lee at ang Pagbasa bilang Pakikibaka" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=may-kasaysayan-ang-sarili-at-pag-ibig-ang-pinilakang-tabing-ni-ricky-lee-at-ang-pagbasa-bilang-pakikibaka') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
