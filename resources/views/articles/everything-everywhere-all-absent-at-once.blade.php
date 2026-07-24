@extends('layouts.share')

@section('page_title', 'Everything, Everywhere, All Absent at Once | CLSU Collegian')
@section('page_description', 'Kung may summary and conclusion man ang buhay ng mga 4th year ngayong linggo, ito na ang final draft.')
@section('canonical_url', url('/article/everything-everywhere-all-absent-at-once?v=2'))
@section('og_title', 'Everything, Everywhere, All Absent at Once | CLSU Collegian')
@section('og_description', 'Kung may summary and conclusion man ang buhay ng mga 4th year ngayong linggo, ito na ang final draft.')
@section('og_image', asset('PHOTOS/KOMIKS/komiks3.jpg'))
@section('og_image_alt', 'everything everywhere all absent at once')
@section('twitter_title', 'Everything, Everywhere, All Absent at Once | CLSU Collegian')
@section('twitter_description', 'Kung may summary and conclusion man ang buhay ng mga 4th year ngayong linggo, ito na ang final draft.')
@section('twitter_image', asset('PHOTOS/KOMIKS/komiks3.jpg'))
@section('twitter_image_alt', 'everything everywhere all absent at once')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Everything, Everywhere, All Absent at Once</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Kung may summary and conclusion man ang buhay ng mga 4th year ngayong linggo, ito na ang final draft.</p>
        <img src="{{ asset('PHOTOS/KOMIKS/komiks3.jpg') }}" alt="everything everywhere all absent at once" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=everything-everywhere-all-absent-at-once') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


