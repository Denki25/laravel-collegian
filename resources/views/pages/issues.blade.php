@php($activePage = 'issues')
@extends('layouts.app')
@section('page_title', 'Archives | CLSU Collegian')
@section('page_description', 'Browse archives and previous issues from CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/=2'))
@section('body_class', '')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="section-page">
        <section class="container">
            <div class="page-intro">
                <h1>Kule Archives</h1>
            </div>

            <section class="featured-archive" id="featuredArchive"></section>

            <div class="news-filters">
                <select id="section-month-filter" title="Filter by month">
                    <option value="all">All months</option>
                </select>
            </div>

            <section class="issues-section issues-section-page">
                <div class="issues-grid" id="issuesPageGrid"></div>
            </section>
        </section>
    </main>
@endsection

