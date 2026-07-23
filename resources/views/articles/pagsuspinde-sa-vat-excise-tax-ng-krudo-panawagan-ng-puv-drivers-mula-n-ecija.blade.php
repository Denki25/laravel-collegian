@extends('layouts.share')

@section('page_title', 'Pagsuspinde sa VAT, excise tax ng krudo panawagan ng PUV drivers mula N. Ecija | CLSU Collegian')
@section('page_description', 'Nakalahati ang kita.  Ganito ilarawan ng ilang tsuper mula sa Science City of Muñoz at San Jose City, Nueva Ecija ang kanilang kasalukuyang kondisyon dulot ng patuloy na pagtaas ng presyo ng diesel.')
@section('canonical_url', url('/share/pagsuspinde-sa-vat-excise-tax-ng-krudo-panawagan-ng-puv-drivers-mula-n-ecija.html?v=2'))
@section('og_title', 'Pagsuspinde sa VAT, excise tax ng krudo panawagan ng PUV drivers mula N. Ecija | CLSU Collegian')
@section('og_description', 'Nakalahati ang kita.  Ganito ilarawan ng ilang tsuper mula sa Science City of Muñoz at San Jose City, Nueva Ecija ang kanilang kasalukuyang kondisyon dulot ng patuloy na pagtaas ng presyo ng diesel.')
@section('og_image', asset('PHOTOS/DEVCOMM/dev1.jpg'))
@section('og_image_alt', 'vat image')
@section('twitter_title', 'Pagsuspinde sa VAT, excise tax ng krudo panawagan ng PUV drivers mula N. Ecija | CLSU Collegian')
@section('twitter_description', 'Nakalahati ang kita.  Ganito ilarawan ng ilang tsuper mula sa Science City of Muñoz at San Jose City, Nueva Ecija ang kanilang kasalukuyang kondisyon dulot ng patuloy na pagtaas ng presyo ng diesel.')
@section('twitter_image', asset('PHOTOS/DEVCOMM/dev1.jpg'))
@section('twitter_image_alt', 'vat image')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Pagsuspinde sa VAT, excise tax ng krudo panawagan ng PUV drivers mula N. Ecija</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Nakalahati ang kita.  Ganito ilarawan ng ilang tsuper mula sa Science City of Muñoz at San Jose City, Nueva Ecija ang kanilang kasalukuyang kondisyon dulot ng patuloy na pagtaas ng presyo ng diesel.</p>
        <img src="{{ asset('PHOTOS/DEVCOMM/dev1.jpg') }}" alt="vat image" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=pagsuspinde-sa-vat-excise-tax-ng-krudo-panawagan-ng-puv-drivers-mula-n-ecija') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
