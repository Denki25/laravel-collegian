@extends('layouts.share')

@section('page_title', 'AI-powered chatbot ilulunsad para sa student inquiries | CLSU Collegian')
@section('page_description', 'Upang mapabilis ang pagtugon sa mga katanungan hinggil sa serbisyong pang-akademiko ng pamantasan, ipakikilala ng Central Luzon State University (CLSU) ang isang Artificial Intelligence (AI)-powered chatbot na nakapaloob sa Comprehensive Academic Information System (CAIS).')
@section('canonical_url', url('/share/ai-powered-chatbot-ilulunsad-para-sa-student-inquiries.html?v=2'))
@section('og_title', 'AI-powered chatbot ilulunsad para sa student inquiries | CLSU Collegian')
@section('og_description', 'Upang mapabilis ang pagtugon sa mga katanungan hinggil sa serbisyong pang-akademiko ng pamantasan, ipakikilala ng Central Luzon State University (CLSU) ang isang Artificial Intelligence (AI)-powered chatbot na nakapaloob sa Comprehensive Academic Information System (CAIS).')
@section('og_image', asset('PHOTOS/NEWS/news13.jpg'))
@section('og_image_alt', 'AI-powered chatbot ilulunsad para sa student inquiries')
@section('twitter_title', 'AI-powered chatbot ilulunsad para sa student inquiries | CLSU Collegian')
@section('twitter_description', 'Upang mapabilis ang pagtugon sa mga katanungan hinggil sa serbisyong pang-akademiko ng pamantasan, ipakikilala ng Central Luzon State University (CLSU) ang isang Artificial Intelligence (AI)-powered chatbot na nakapaloob sa Comprehensive Academic Information System (CAIS).')
@section('twitter_image', asset('PHOTOS/NEWS/news13.jpg'))
@section('twitter_image_alt', 'AI-powered chatbot ilulunsad para sa student inquiries')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">AI-powered chatbot ilulunsad para sa student inquiries</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Upang mapabilis ang pagtugon sa mga katanungan hinggil sa serbisyong pang-akademiko ng pamantasan, ipakikilala ng Central Luzon State University (CLSU) ang isang Artificial Intelligence (AI)-powered chatbot na nakapaloob sa Comprehensive Academic Information System (CAIS).</p>
        <img src="{{ asset('PHOTOS/NEWS/news13.jpg') }}" alt="AI-powered chatbot ilulunsad para sa student inquiries" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article.html?slug=ai-powered-chatbot-ilulunsad-para-sa-student-inquiries') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection
