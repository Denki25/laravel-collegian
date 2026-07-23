@extends('layouts.share')

@section('page_title', 'Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement | CLSU Collegian')
@section('page_description', 'Central Luzon State University (CLSU) is set to confer an honorary Doctorate in Rural Development on Nueva Ecija Gov. Aurelio “Oyie” Umali, pending approval from the Commission on Higher Education (CHED), following a possible endorsement by the University&#39;s Board of Regents (BOR).')
@section('canonical_url', url('/share/gov-umali-to-be-awarded-honoris-causa-once-ched-oks-clsu-bor-endorsement.html?v=2'))
@section('og_title', 'Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement | CLSU Collegian')
@section('og_description', 'Central Luzon State University (CLSU) is set to confer an honorary Doctorate in Rural Development on Nueva Ecija Gov. Aurelio “Oyie” Umali, pending approval from the Commission on Higher Education (CHED), following a possible endorsement by the University&#39;s Board of Regents (BOR).')
@section('og_image', asset('PHOTOS/NEWS/news9.jpg'))
@section('og_image_alt', 'Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement')
@section('twitter_title', 'Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement | CLSU Collegian')
@section('twitter_description', 'Central Luzon State University (CLSU) is set to confer an honorary Doctorate in Rural Development on Nueva Ecija Gov. Aurelio “Oyie” Umali, pending approval from the Commission on Higher Education (CHED), following a possible endorsement by the University&#39;s Board of Regents (BOR).')
@section('twitter_image', asset('PHOTOS/NEWS/news9.jpg'))
@section('twitter_image_alt', 'Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Central Luzon State University (CLSU) is set to confer an honorary Doctorate in Rural Development on Nueva Ecija Gov. Aurelio “Oyie” Umali, pending approval from the Commission on Higher Education (CHED), following a possible endorsement by the University&#39;s Board of Regents (BOR).</p>
        <img src="{{ asset('PHOTOS/NEWS/news9.jpg') }}" alt="Gov. Umali to be awarded honoris causa once CHED OKs CLSU BOR endorsement" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=gov-umali-to-be-awarded-honoris-causa-once-ched-oks-clsu-bor-endorsement') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
