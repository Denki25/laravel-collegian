@extends('layouts.share')

@section('page_title', 'Farmgate price ng sibuyas sa Bongabon sumadsad; Imbestigasyon sa imports panawagan ng LGU | CLSU Collegian')
@section('page_description', 'Humina ang kita ng mga magsasaka sa Bongabon, Nueva Ecija matapos bumagsak sa P30 hanggang P40 kada kilo ang farmgate price ng sibuyas nitong nagdaang Pebrero mula sa presyong P80 hanggang P95 kada kilo noong Enero.')
@section('canonical_url', url('/article/farmgate-price-ng-sibuyas-sa-bongabon-sumadsad-imbestigasyon-sa-imports-panawagan-ng-lgu?v=2'))
@section('og_title', 'Farmgate price ng sibuyas sa Bongabon sumadsad; Imbestigasyon sa imports panawagan ng LGU | CLSU Collegian')
@section('og_description', 'Humina ang kita ng mga magsasaka sa Bongabon, Nueva Ecija matapos bumagsak sa P30 hanggang P40 kada kilo ang farmgate price ng sibuyas nitong nagdaang Pebrero mula sa presyong P80 hanggang P95 kada kilo noong Enero.')
@section('og_image', asset('PHOTOS/DEVCOMM/dev2.jpg'))
@section('og_image_alt', 'devcomm image')
@section('twitter_title', 'Farmgate price ng sibuyas sa Bongabon sumadsad; Imbestigasyon sa imports panawagan ng LGU | CLSU Collegian')
@section('twitter_description', 'Humina ang kita ng mga magsasaka sa Bongabon, Nueva Ecija matapos bumagsak sa P30 hanggang P40 kada kilo ang farmgate price ng sibuyas nitong nagdaang Pebrero mula sa presyong P80 hanggang P95 kada kilo noong Enero.')
@section('twitter_image', asset('PHOTOS/DEVCOMM/dev2.jpg'))
@section('twitter_image_alt', 'devcomm image')

@section('content')
    <main style="max-width: 720px; margin: 48px auto; font-family: Arial, sans-serif; padding: 0 20px;">
        <p style="text-transform: uppercase; letter-spacing: .12em; color: #fe5d13; font-weight: 700; margin-bottom: 12px;">CLSU Collegian</p>
        <h1 style="font-size: 2rem; line-height: 1.15; margin: 0 0 12px;">Farmgate price ng sibuyas sa Bongabon sumadsad; Imbestigasyon sa imports panawagan ng LGU</h1>
        <p style="font-size: 1.05rem; line-height: 1.6; color: #444; margin: 0 0 24px;">Humina ang kita ng mga magsasaka sa Bongabon, Nueva Ecija matapos bumagsak sa P30 hanggang P40 kada kilo ang farmgate price ng sibuyas nitong nagdaang Pebrero mula sa presyong P80 hanggang P95 kada kilo noong Enero.</p>
        <img src="{{ asset('PHOTOS/DEVCOMM/dev2.jpg') }}" alt="devcomm image" style="width: 100%; height: auto; border-radius: 16px; display: block; margin-bottom: 20px;">
        <p style="font-size: .95rem; color: #666; margin: 0 0 16px;">This preview page is safe to share on Facebook and X/Twitter.</p>
        <a href="{{ url('/article?slug=farmgate-price-ng-sibuyas-sa-bongabon-sumadsad-imbestigasyon-sa-imports-panawagan-ng-lgu') }}" style="display: inline-block; background: #fe5d13; color: #fff; text-decoration: none; padding: 12px 18px; border-radius: 999px; font-weight: 700;">Read full article</a>
    </main>
@endsection


