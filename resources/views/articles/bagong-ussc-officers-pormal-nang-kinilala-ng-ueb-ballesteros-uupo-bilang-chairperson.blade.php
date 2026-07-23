@extends('layouts.share')

@section('page_title', 'Bagong USSC Officers, pormal nang kinilala ng UEB; Ballesteros, uupo bilang Chairperson | CLSU Collegian')
@section('page_description', 'Proklamado na ng University Electoral Board ang mga susunod na manunungkulan sa University Supreme Student Council matapos ang halalan.')
@section('canonical_url', url('/share/bagong-ussc-officers-pormal-nang-kinilala-ng-ueb-ballesteros-uupo-bilang-chairperson.html?v=2'))
@section('og_title', 'Bagong USSC Officers, pormal nang kinilala ng UEB; Ballesteros, uupo bilang Chairperson | CLSU Collegian')
@section('og_description', 'Proklamado na ng University Electoral Board ang mga susunod na manunungkulan sa University Supreme Student Council matapos ang halalan.')
@section('og_image', asset('PHOTOS/INFOGRAPHICS/infographics1.jpg'))
@section('og_image_alt', 'USSC officers infographic')
@section('twitter_title', 'Bagong USSC Officers, pormal nang kinilala ng UEB; Ballesteros, uupo bilang Chairperson | CLSU Collegian')
@section('twitter_description', 'Proklamado na ng University Electoral Board ang mga susunod na manunungkulan sa University Supreme Student Council matapos ang halalan.')
@section('twitter_image', asset('PHOTOS/INFOGRAPHICS/infographics1.jpg'))
@section('twitter_image_alt', 'USSC officers infographic')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Bagong USSC Officers, pormal nang kinilala ng UEB; Ballesteros, uupo bilang Chairperson</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Proklamado na ng University Electoral Board ang mga susunod na manunungkulan sa University Supreme Student Council matapos ang halalan.</p>
        <img src="{{ asset('PHOTOS/INFOGRAPHICS/infographics1.jpg') }}" alt="USSC officers infographic" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=bagong-ussc-officers-pormal-nang-kinilala-ng-ueb-ballesteros-uupo-bilang-chairperson') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
