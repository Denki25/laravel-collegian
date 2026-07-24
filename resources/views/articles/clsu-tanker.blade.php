@extends('layouts.share')

@section('page_title', 'CLSU tankers grab 9 medals at SUC III Olympics swimming events | CLSU Collegian')
@section('page_description', 'CLSU Green Cobras swimming team bagged three gold, four silver, and two bronze in individual swimming events in the 2026 State Universities and Colleges (SUC) III Olympics at Nueva Ecija University of Science and Technology (NEUST) Sumacab Campus.')
@section('canonical_url', url('/article/clsu-tanker?v=2'))
@section('og_title', 'CLSU tankers grab 9 medals at SUC III Olympics swimming events | CLSU Collegian')
@section('og_description', 'CLSU Green Cobras swimming team bagged three gold, four silver, and two bronze in individual swimming events in the 2026 State Universities and Colleges (SUC) III Olympics at Nueva Ecija University of Science and Technology (NEUST) Sumacab Campus.')
@section('og_image', asset('PHOTOS/SPORTS/sports2.jpg'))
@section('og_image_alt', 'clsu tanker')
@section('twitter_title', 'CLSU tankers grab 9 medals at SUC III Olympics swimming events | CLSU Collegian')
@section('twitter_description', 'CLSU Green Cobras swimming team bagged three gold, four silver, and two bronze in individual swimming events in the 2026 State Universities and Colleges (SUC) III Olympics at Nueva Ecija University of Science and Technology (NEUST) Sumacab Campus.')
@section('twitter_image', asset('PHOTOS/SPORTS/sports2.jpg'))
@section('twitter_image_alt', 'clsu tanker')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU tankers grab 9 medals at SUC III Olympics swimming events</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">CLSU Green Cobras swimming team bagged three gold, four silver, and two bronze in individual swimming events in the 2026 State Universities and Colleges (SUC) III Olympics at Nueva Ecija University of Science and Technology (NEUST) Sumacab Campus.</p>
        <img src="{{ asset('PHOTOS/SPORTS/sports2.jpg') }}" alt="clsu tanker" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=clsu-tanker') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


