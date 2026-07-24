@php($activePage = 'news')
@extends('layouts.app')
@section('page_title', 'News | CLSU Collegian')
@section('page_description', 'Latest News stories from CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/=2'))
@section('body_attributes', 'data-section-category="News" data-section-label="News"')
@section('body_class', '')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="section-page">
        <section class="container">
            <div class="page-intro">
                <h1>News</h1>
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

