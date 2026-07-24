@php($activePage = 'home')
@extends('layouts.app')
@section('page_title', 'CLSU Collegian | The Official Student Publication of CLSU')
@section('page_description', 'Official student publication of Central Luzon State University featuring news, features, opinion, sports, literary, multimedia, and archives.')
@section('canonical_url', url('/?v=2'))
@section('og_title', 'CLSU Collegian | The Official Student Publication of CLSU')
@section('og_description', 'Official student publication of Central Luzon State University featuring news, features, opinion, sports, literary, multimedia, and archives.')
@section('body_class', 'home-page')
@section('preheader')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main>
        <section class="hero">
            <div class="hero-content">
                <div class="hero-text">
                    <span class="hero-category" id="heroCategory">Featured</span>
                    <h2 id="heroTitle">CLSU Collegian</h2>
                    <p id="heroSummary">Campus stories, features, and multimedia from the official student publication.</p>
                    <div class="hero-meta" aria-label="Featured story details">
                        <span class="hero-date" id="heroDate"></span>
                        <span class="hero-meta-separator" id="heroMetaSeparator" aria-hidden="true">&bull;</span>
                        <span class="hero-byline" id="heroByline"></span>
                    </div>
                    <a href="{{ url('/article') }}" class="read-more" id="heroLink">Read Story</a>
                </div>
                <div class="hero-image" id="heroImageWrapper">
                    <div class="hero-slide-media" id="heroSlideMedia">
                        <div class="hero-placeholder"></div>
                    </div>
                    <button type="button" class="hero-carousel-arrow hero-carousel-arrow-left" id="heroPrevButton" aria-label="Show previous featured image">&#10094;</button>
                    <button type="button" class="hero-carousel-arrow hero-carousel-arrow-right" id="heroNextButton" aria-label="Show next featured image">&#10095;</button>
                    <div class="hero-carousel-dots" id="heroCarouselDots" aria-label="Featured article carousel"></div>
                </div>
            </div>
        </section>

        <section class="latest-articles" id="news">
            <div class="container">
                <h2>Latest Articles</h2>
                <div class="articles-grid" id="articlesGrid"></div>
            </div>
        </section>

        <section class="trending-table-section">
            <div class="container">
                <div class="trending-table-card">
                    <div class="trending-table-header">
                        <h3>Trending</h3>
                        <p>Campus stories</p>
                    </div>
                    <div class="trending-table" id="trendingTable"></div>
                </div>
            </div>
        </section>

        <section class="multimedia" id="multimedia">
            <div class="container">
                <div class="section-heading">
                    <h2>Latest Videos</h2>
                    <a href="{{ url('/multimedia') }}" class="section-link">View all videos</a>
                </div>
                <div class="videos-grid" id="homeMultimediaGrid"></div>
            </div>
        </section>

        <section class="issues-section" id="issues">
            <div class="container">
                <div class="section-heading">
                    <h2>Latest Archive</h2>
                    <a href="{{ url('/issues') }}" class="section-link">Browse archives</a>
                </div>
                <div class="issues-grid" id="homeIssuesGrid"></div>
            </div>
        </section>
    </main>
@endsection

