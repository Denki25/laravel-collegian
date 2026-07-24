@extends('layouts.share')

@section('page_title', 'Kung Saan Lumutang ang Cuyapo | CLSU Collegian')
@section('page_description', 'Isang bagong kapistahan ang sumibol ngayong Marso sa bayan ng Cuyapo, ang Warek-Warek Festival na nagbibigay-pugay sa isang putaheng Ilokano. Indakan sa lansangan, malilikhaing floats, at masisiglang kantahan ang nagbigay-buhay sa taunang kapistahan ng bayan.')
@section('canonical_url', url('/article/kung-saan-lumutang-ang-cuyapo?v=2'))
@section('og_title', 'Kung Saan Lumutang ang Cuyapo | CLSU Collegian')
@section('og_description', 'Isang bagong kapistahan ang sumibol ngayong Marso sa bayan ng Cuyapo, ang Warek-Warek Festival na nagbibigay-pugay sa isang putaheng Ilokano. Indakan sa lansangan, malilikhaing floats, at masisiglang kantahan ang nagbigay-buhay sa taunang kapistahan ng bayan.')
@section('og_image', asset('PHOTOS/FEATURES/feature9.jpg'))
@section('og_image_alt', 'Kung Saan Lumutang ang Cuyapo')
@section('twitter_title', 'Kung Saan Lumutang ang Cuyapo | CLSU Collegian')
@section('twitter_description', 'Isang bagong kapistahan ang sumibol ngayong Marso sa bayan ng Cuyapo, ang Warek-Warek Festival na nagbibigay-pugay sa isang putaheng Ilokano. Indakan sa lansangan, malilikhaing floats, at masisiglang kantahan ang nagbigay-buhay sa taunang kapistahan ng bayan.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature9.jpg'))
@section('twitter_image_alt', 'Kung Saan Lumutang ang Cuyapo')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Kung Saan Lumutang ang Cuyapo</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Isang bagong kapistahan ang sumibol ngayong Marso sa bayan ng Cuyapo, ang Warek-Warek Festival na nagbibigay-pugay sa isang putaheng Ilokano. Indakan sa lansangan, malilikhaing floats, at masisiglang kantahan ang nagbigay-buhay sa taunang kapistahan ng bayan.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature9.jpg') }}" alt="Kung Saan Lumutang ang Cuyapo" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=kung-saan-lumutang-ang-cuyapo') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


