@extends('layouts.share')

@section('page_title', 'The Mill that Grinds Us All | CLSU Collegian')
@section('page_description', 'The air in Toboso usually smells of burnt caneâ€”a heavy, caramel scent that lingers. Its mountain rustles a promise of sweetnessâ€”it gathers and trickles far beyond the hands that grow it. But if you dig just a few inches below the stalks, the soil tells a different story.')
@section('canonical_url', url('/article/the-mill-that-grinds-us-all?v=2'))
@section('og_title', 'The Mill that Grinds Us All | CLSU Collegian')
@section('og_description', 'The air in Toboso usually smells of burnt caneâ€”a heavy, caramel scent that lingers. Its mountain rustles a promise of sweetnessâ€”it gathers and trickles far beyond the hands that grow it. But if you dig just a few inches below the stalks, the soil tells a different story.')
@section('og_image', asset('PHOTOS/LITERARY/lit3.jpg'))
@section('og_image_alt', 'The Mill that grinds us all artwork')
@section('twitter_title', 'The Mill that Grinds Us All | CLSU Collegian')
@section('twitter_description', 'The air in Toboso usually smells of burnt caneâ€”a heavy, caramel scent that lingers. Its mountain rustles a promise of sweetnessâ€”it gathers and trickles far beyond the hands that grow it. But if you dig just a few inches below the stalks, the soil tells a different story.')
@section('twitter_image', asset('PHOTOS/LITERARY/lit3.jpg'))
@section('twitter_image_alt', 'The Mill that grinds us all artwork')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">The Mill that Grinds Us All</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">The air in Toboso usually smells of burnt caneâ€”a heavy, caramel scent that lingers. Its mountain rustles a promise of sweetnessâ€”it gathers and trickles far beyond the hands that grow it. But if you dig just a few inches below the stalks, the soil tells a different story.</p>
        <img src="{{ asset('PHOTOS/LITERARY/lit3.jpg') }}" alt="The Mill that grinds us all artwork" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=the-mill-that-grinds-us-all') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


