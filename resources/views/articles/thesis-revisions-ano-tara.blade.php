@extends('layouts.share')

@section('page_title', 'Thesis revisions, ano tara? | CLSU Collegian')
@section('page_description', 'Ready na ang pakyawan ng package sa studio dahil ready na rin ang best angles and smile para sa graduationâ€¦ pero pakyawan din ang red marks ng adviser sa thesis?! Mahirap kayang ngumiti kapag naalala mo ang â€œREVISE CHAPTER 3â€ na naka-bold at italic.')
@section('canonical_url', url('/article/thesis-revisions-ano-tara?v=2'))
@section('og_title', 'Thesis revisions, ano tara? | CLSU Collegian')
@section('og_description', 'Ready na ang pakyawan ng package sa studio dahil ready na rin ang best angles and smile para sa graduationâ€¦ pero pakyawan din ang red marks ng adviser sa thesis?! Mahirap kayang ngumiti kapag naalala mo ang â€œREVISE CHAPTER 3â€ na naka-bold at italic.')
@section('og_image', asset('PHOTOS/KOMIKS/komiks4.jpg'))
@section('og_image_alt', 'Thesis revisions, ano tara?')
@section('twitter_title', 'Thesis revisions, ano tara? | CLSU Collegian')
@section('twitter_description', 'Ready na ang pakyawan ng package sa studio dahil ready na rin ang best angles and smile para sa graduationâ€¦ pero pakyawan din ang red marks ng adviser sa thesis?! Mahirap kayang ngumiti kapag naalala mo ang â€œREVISE CHAPTER 3â€ na naka-bold at italic.')
@section('twitter_image', asset('PHOTOS/KOMIKS/komiks4.jpg'))
@section('twitter_image_alt', 'Thesis revisions, ano tara?')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Thesis revisions, ano tara?</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Ready na ang pakyawan ng package sa studio dahil ready na rin ang best angles and smile para sa graduationâ€¦ pero pakyawan din ang red marks ng adviser sa thesis?! Mahirap kayang ngumiti kapag naalala mo ang â€œREVISE CHAPTER 3â€ na naka-bold at italic.</p>
        <img src="{{ asset('PHOTOS/KOMIKS/komiks4.jpg') }}" alt="Thesis revisions, ano tara?" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=thesis-revisions-ano-tara') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


