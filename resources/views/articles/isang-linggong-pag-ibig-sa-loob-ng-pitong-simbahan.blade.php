@extends('layouts.share')

@section('page_title', 'Isang Linggong Pag-ibig sa Loob ng Pitong Simbahan | CLSU Collegian')
@section('page_description', 'Isa ang Visita Iglesia sa mga tradisyon ng mga Katoliko tuwing Semana Santa. Ito ay bahagi ng pag-alala sa sakripisyo ng Panginoonâ€”isang makabuluhang ritwal ng pananampalataya at pagninilay.')
@section('canonical_url', url('/article/isang-linggong-pag-ibig-sa-loob-ng-pitong-simbahan?v=2'))
@section('og_title', 'Isang Linggong Pag-ibig sa Loob ng Pitong Simbahan | CLSU Collegian')
@section('og_description', 'Isa ang Visita Iglesia sa mga tradisyon ng mga Katoliko tuwing Semana Santa. Ito ay bahagi ng pag-alala sa sakripisyo ng Panginoonâ€”isang makabuluhang ritwal ng pananampalataya at pagninilay.')
@section('og_image', asset('PHOTOS/FEATURES/feature7.jpg'))
@section('og_image_alt', '...')
@section('twitter_title', 'Isang Linggong Pag-ibig sa Loob ng Pitong Simbahan | CLSU Collegian')
@section('twitter_description', 'Isa ang Visita Iglesia sa mga tradisyon ng mga Katoliko tuwing Semana Santa. Ito ay bahagi ng pag-alala sa sakripisyo ng Panginoonâ€”isang makabuluhang ritwal ng pananampalataya at pagninilay.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature7.jpg'))
@section('twitter_image_alt', '...')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Isang Linggong Pag-ibig sa Loob ng Pitong Simbahan</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Isa ang Visita Iglesia sa mga tradisyon ng mga Katoliko tuwing Semana Santa. Ito ay bahagi ng pag-alala sa sakripisyo ng Panginoonâ€”isang makabuluhang ritwal ng pananampalataya at pagninilay.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature7.jpg') }}" alt="..." style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=isang-linggong-pag-ibig-sa-loob-ng-pitong-simbahan') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


