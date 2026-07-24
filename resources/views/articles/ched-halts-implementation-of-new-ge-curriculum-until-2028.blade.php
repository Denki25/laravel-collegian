@extends('layouts.share')

@section('page_title', 'CHED halts implementation of new GE curriculum until 2028 | CLSU Collegian')
@section('page_description', 'The Commission on Higher Education (CHED) has postponed the pilot implementation of the reframed General Education (GE) curriculum to allow for further review and consultation with its stakeholders, CHED Chairperson Shirley Agrupis announced in a press conference on May 13.')
@section('canonical_url', url('/article/ched-halts-implementation-of-new-ge-curriculum-until-2028?v=2'))
@section('og_title', 'CHED halts implementation of new GE curriculum until 2028 | CLSU Collegian')
@section('og_description', 'The Commission on Higher Education (CHED) has postponed the pilot implementation of the reframed General Education (GE) curriculum to allow for further review and consultation with its stakeholders, CHED Chairperson Shirley Agrupis announced in a press conference on May 13.')
@section('og_image', asset('PHOTOS/NEWS/news11.jpg'))
@section('og_image_alt', 'CHED halts implementation of new GE curriculum until 2028')
@section('twitter_title', 'CHED halts implementation of new GE curriculum until 2028 | CLSU Collegian')
@section('twitter_description', 'The Commission on Higher Education (CHED) has postponed the pilot implementation of the reframed General Education (GE) curriculum to allow for further review and consultation with its stakeholders, CHED Chairperson Shirley Agrupis announced in a press conference on May 13.')
@section('twitter_image', asset('PHOTOS/NEWS/news11.jpg'))
@section('twitter_image_alt', 'CHED halts implementation of new GE curriculum until 2028')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">CHED halts implementation of new GE curriculum until 2028</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">The Commission on Higher Education (CHED) has postponed the pilot implementation of the reframed General Education (GE) curriculum to allow for further review and consultation with its stakeholders, CHED Chairperson Shirley Agrupis announced in a press conference on May 13.</p>
        <img src="{{ asset('PHOTOS/NEWS/news11.jpg') }}" alt="CHED halts implementation of new GE curriculum until 2028" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=ched-halts-implementation-of-new-ge-curriculum-until-2028') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


