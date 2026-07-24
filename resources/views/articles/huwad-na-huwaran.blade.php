@extends('layouts.share')

@section('page_title', 'Huwad na Huwaran | CLSU Collegian')
@section('page_description', 'Unti-unting nalulusaw ang kredibilidad ng Central Luzon State University (CLSU) bilang haligi ng agrikultura at agham dahil ang pangalang matagal nang inuulan ng kontrobersiya ay siya pang itinatanghal sa sentro ng akademikong pagkilala.')
@section('canonical_url', url('/article/huwad-na-huwaran?v=2'))
@section('og_title', 'Huwad na Huwaran | CLSU Collegian')
@section('og_description', 'Unti-unting nalulusaw ang kredibilidad ng Central Luzon State University (CLSU) bilang haligi ng agrikultura at agham dahil ang pangalang matagal nang inuulan ng kontrobersiya ay siya pang itinatanghal sa sentro ng akademikong pagkilala.')
@section('og_image', asset('PHOTOS/EDITORIAL/editorial1.jpg'))
@section('og_image_alt', 'huwad na huwaran')
@section('twitter_title', 'Huwad na Huwaran | CLSU Collegian')
@section('twitter_description', 'Unti-unting nalulusaw ang kredibilidad ng Central Luzon State University (CLSU) bilang haligi ng agrikultura at agham dahil ang pangalang matagal nang inuulan ng kontrobersiya ay siya pang itinatanghal sa sentro ng akademikong pagkilala.')
@section('twitter_image', asset('PHOTOS/EDITORIAL/editorial1.jpg'))
@section('twitter_image_alt', 'huwad na huwaran')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Huwad na Huwaran</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Unti-unting nalulusaw ang kredibilidad ng Central Luzon State University (CLSU) bilang haligi ng agrikultura at agham dahil ang pangalang matagal nang inuulan ng kontrobersiya ay siya pang itinatanghal sa sentro ng akademikong pagkilala.</p>
        <img src="{{ asset('PHOTOS/EDITORIAL/editorial1.jpg') }}" alt="huwad na huwaran" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=huwad-na-huwaran') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


