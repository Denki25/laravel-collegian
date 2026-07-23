@php
    $heading = $heading ?? 'Section';
    $sectionId = $sectionId ?? 'section-list';
    $showMonthFilter = $showMonthFilter ?? true;
@endphp

<main class="section-page">
    <section class="container">
        <div class="page-intro">
            <h1>{{ $heading }}</h1>
        </div>

        @if($showMonthFilter)
            <div class="news-filters">
                <select id="section-month-filter" title="Filter by month">
                    <option value="all">All months</option>
                </select>
            </div>
        @endif

        <div id="{{ $sectionId }}"></div>
    </section>
</main>

