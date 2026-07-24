@extends('layouts.share')

@section('page_title', 'Kapag Namumukadkad ang Alaala | CLSU Collegian')
@section('page_description', 'Bago pa dumating ang panahon ng social media, mamahaling mga damit, at kaliwaâ€™t kanan na picture-taking, naging bahagi muna ng payak ngunit masiglang buhay-baryo ang Flores de Mayo. Sa mga kwentong tangan nina Nanay Tess, Nanay Maribel, at Nanay Lorna, nananatiling buhay ang tradisyong minsang nagbuklod sa simbahan, pamilya, at buong komunidad.')
@section('canonical_url', url('/article/kapag-namumukadkad-ang-alaala?v=2'))
@section('og_title', 'Kapag Namumukadkad ang Alaala | CLSU Collegian')
@section('og_description', 'Bago pa dumating ang panahon ng social media, mamahaling mga damit, at kaliwaâ€™t kanan na picture-taking, naging bahagi muna ng payak ngunit masiglang buhay-baryo ang Flores de Mayo. Sa mga kwentong tangan nina Nanay Tess, Nanay Maribel, at Nanay Lorna, nananatiling buhay ang tradisyong minsang nagbuklod sa simbahan, pamilya, at buong komunidad.')
@section('og_image', asset('PHOTOS/FEATURES/feature5.jpg'))
@section('og_image_alt', 'Kapag Namumukadkad ang Alaala')
@section('twitter_title', 'Kapag Namumukadkad ang Alaala | CLSU Collegian')
@section('twitter_description', 'Bago pa dumating ang panahon ng social media, mamahaling mga damit, at kaliwaâ€™t kanan na picture-taking, naging bahagi muna ng payak ngunit masiglang buhay-baryo ang Flores de Mayo. Sa mga kwentong tangan nina Nanay Tess, Nanay Maribel, at Nanay Lorna, nananatiling buhay ang tradisyong minsang nagbuklod sa simbahan, pamilya, at buong komunidad.')
@section('twitter_image', asset('PHOTOS/FEATURES/feature5.jpg'))
@section('twitter_image_alt', 'Kapag Namumukadkad ang Alaala')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Kapag Namumukadkad ang Alaala</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Bago pa dumating ang panahon ng social media, mamahaling mga damit, at kaliwaâ€™t kanan na picture-taking, naging bahagi muna ng payak ngunit masiglang buhay-baryo ang Flores de Mayo. Sa mga kwentong tangan nina Nanay Tess, Nanay Maribel, at Nanay Lorna, nananatiling buhay ang tradisyong minsang nagbuklod sa simbahan, pamilya, at buong komunidad.</p>
        <img src="{{ asset('PHOTOS/FEATURES/feature5.jpg') }}" alt="Kapag Namumukadkad ang Alaala" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=kapag-namumukadkad-ang-alaala') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


