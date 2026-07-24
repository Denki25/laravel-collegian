@extends('layouts.share')

@section('page_title', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Day | CLSU Collegian')
@section('page_description', 'Mama,  pasensya ka na dahil ako ang anak mo at hindi bukal sa akin ang bigyan ka ng rosas o magagandang salita.')
@section('canonical_url', url('/article/isinusuka-ko-ang-pagbati-ng-happy-mothers-day?v=2'))
@section('og_title', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Day | CLSU Collegian')
@section('og_description', 'Mama,  pasensya ka na dahil ako ang anak mo at hindi bukal sa akin ang bigyan ka ng rosas o magagandang salita.')
@section('og_image', asset('PHOTOS/LITERARY/lit6.jpg'))
@section('og_image_alt', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork')
@section('twitter_title', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Day | CLSU Collegian')
@section('twitter_description', 'Mama,  pasensya ka na dahil ako ang anak mo at hindi bukal sa akin ang bigyan ka ng rosas o magagandang salita.')
@section('twitter_image', asset('PHOTOS/LITERARY/lit6.jpg'))
@section('twitter_image_alt', 'Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Day</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Mama,  pasensya ka na dahil ako ang anak mo at hindi bukal sa akin ang bigyan ka ng rosas o magagandang salita.</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit6.jpg') }}" alt="Isinusuka ko ang Pagbati ng â€œHappy Motherâ€™s Dayâ€ artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=isinusuka-ko-ang-pagbati-ng-happy-mothers-day') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


