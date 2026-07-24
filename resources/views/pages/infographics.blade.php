@php($activePage = 'infographics')
@extends('layouts.app')
@section('page_title', 'Komiks | CLSU Collegian')
@section('page_description', 'Infographics and komiks from CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/=2'))
@section('body_attributes', 'data-section-category="Komiks" data-section-label="Komiks"')
@section('body_class', '')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="section-page">
        <section class="container">
            <div class="page-intro">
                <h1>Komiks</h1>
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

