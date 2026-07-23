@php($activePage = 'multimedia')
@extends('layouts.app')
@section('page_title', 'Multimedia | CLSU Collegian')
@section('page_description', 'Videos and multimedia stories from CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/multimedia.html?v=2'))
@section('body_class', 'multimedia-page')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="section-page">
        <section class="container">
            <div class="page-intro multimedia-intro">
                <h1>Multimedia</h1>
            </div>

            <section class="multimedia-featured-section">
                <div class="section-heading multimedia-section-heading">
                    <h2>Featured Videos</h2>
                </div>
                <div class="videos-grid multimedia-featured-grid" id="multimediaFeaturedGrid"></div>
            </section>

            <section class="multimedia multimedia-latest-section">
                <div class="section-heading multimedia-section-heading">
                    <h2>Latest Videos</h2>
                </div>
                <div class="videos-grid" id="multimediaPageGrid"></div>
            </section>
        </section>
    </main>
@endsection
