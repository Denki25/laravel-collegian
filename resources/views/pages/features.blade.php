@php($activePage = 'features')
@extends('layouts.app')
@section('page_title', 'Features | CLSU Collegian')
@section('page_description', 'Features stories from CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/features.html?v=2'))
@section('body_attributes', 'data-section-category="Features" data-section-label="Features"')
@section('body_class', '')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="section-page">
        <section class="container">
            <div class="page-intro">
                <h1>Features</h1>
            </div>

            <div class="news-filters">
                <select id="section-month-filter" title="Filter by month">
                    <option value="all">All months</option>
                </select>
            </div>

            <div id="section-list"></div>
        </section>
    </main>
@endsection
