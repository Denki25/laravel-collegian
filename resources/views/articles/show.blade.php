@php($activePage = '')
@extends('layouts.app')
@section('page_title', ($page->title ?? 'Article') . ' | CLSU Collegian')
@section('page_description', $page->summary ?? 'Campus stories from the official student publication of Central Luzon State University.')
@section('canonical_url', $page->url ?? url('/'))
@section('og_type', 'article')
@section('og_title', $page->title ?? 'CLSU Collegian Article')
@section('og_description', $page->summary ?? 'Campus stories from the official student publication of Central Luzon State University.')
@section('og_image', !empty($page->image) ? asset($page->image) : (!empty($page->featured_image) ? asset($page->featured_image) : asset('PHOTOS/NEWS/news3.jpg')))
@section('twitter_title', $page->title ?? 'CLSU Collegian Article')
@section('twitter_description', $page->summary ?? 'Campus stories from the official student publication of Central Luzon State University.')
@section('twitter_image', !empty($page->image) ? asset($page->image) : (!empty($page->featured_image) ? asset($page->featured_image) : asset('PHOTOS/NEWS/news3.jpg')))
@section('body_class', 'article-page')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="article-main">
        <article class="article-content">
            <header class="article-header">
                <span class="article-category feature-category">
                    {{ strtoupper($page->displayCategory ?? $page->category ?? 'Article') }}
                </span>
                <h1>{{ $page->title ?? 'Untitled Article' }}</h1>
                <div class="article-meta">
                    <span class="date">
                        {{ isset($page->date) ? $page->date->format('F j, Y') : '' }}
                    </span>
                    <span class="read-time">{{ $page->readTime ?? $page->read_time ?? '2 min read' }}</span>
                </div>
                @if (!empty($page->authorLine) || !empty($page->byline) || !empty($page->author))
                    <div class="article-credits">
                        {{ $page->authorLine ?? $page->byline ?? $page->author }}
                    </div>
                @endif
            </header>

            @if (!empty($page->image) || !empty($page->featured_image))
                <figure class="featured-image">
                    <img src="{{ asset($page->image ?? $page->featured_image) }}" alt="{{ $page->imageAlt ?? $page->image_alt ?? $page->title }}">
                    @if (!empty($page->imageCaption) || !empty($page->caption))
                        <figcaption>{{ $page->imageCaption ?? $page->caption }}</figcaption>
                    @endif
                </figure>
            @endif

            @if (!empty($page->summary))
                <p class="article-summary">{{ $page->summary }}</p>
            @endif

            <div class="article-body">
                {!! $page->content !!}
            </div>
        </article>
    </main>
@endsection
