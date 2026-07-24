@extends('layouts.share')

@section('page_title', 'CLSU Infirmary tallies 50 UWeek-related med emergencies | CLSU Collegian')
@section('page_description', 'During the height of the 119th Founding Anniversary of CLSU, the University Infirmary recorded around 50 student performers who sought medical assistance.')
@section('canonical_url', url('/article/clsu-infirmary-tallies-50-uweek-related-med-emergencies?v=2'))
@section('og_title', 'CLSU Infirmary tallies 50 UWeek-related med emergencies | CLSU Collegian')
@section('og_description', 'During the height of the 119th Founding Anniversary of CLSU, the University Infirmary recorded around 50 student performers who sought medical assistance.')
@section('og_image', asset('PHOTOS/NEWS/news1.jpg'))
@section('og_image_alt', 'CLSU Infirmary response during UWeek activities')
@section('twitter_title', 'CLSU Infirmary tallies 50 UWeek-related med emergencies | CLSU Collegian')
@section('twitter_description', 'During the height of the 119th Founding Anniversary of CLSU, the University Infirmary recorded around 50 student performers who sought medical assistance.')
@section('twitter_image', asset('PHOTOS/NEWS/news1.jpg'))
@section('twitter_image_alt', 'CLSU Infirmary response during UWeek activities')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CLSU Infirmary tallies 50 UWeek-related med emergencies</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">During the height of the 119th Founding Anniversary of CLSU, the University Infirmary recorded around 50 student performers who sought medical assistance.</p>
        <img src="{{ asset('PHOTOS/NEWS/news1.jpg') }}" alt="CLSU Infirmary response during UWeek activities" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=clsu-infirmary-tallies-50-uweek-related-med-emergencies') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


