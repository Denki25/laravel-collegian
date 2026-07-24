@php($activePage = '')
@extends('layouts.app')
@section('page_title', 'CLSU Collegian Article')
@section('page_description', 'Campus stories, features, and multimedia from the official student publication of Central Luzon State University.')
@section('canonical_url', url('/=2'))
@section('og_type', 'article')
@section('body_class', '')
@section('extra_head')
    <script>
        (function () {
            var connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
            if (!connection) {
                return;
            }

            var effectiveType = String(connection.effectiveType || "").toLowerCase();
            if (connection.saveData || effectiveType === "slow-2g" || effectiveType === "2g") {
                document.documentElement.classList.add("article-loading");
            }
        })();
    </script>
@endsection
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="article-main">
        <article class="article-content">
            <div class="article-skeleton" aria-hidden="true">
                <div class="article-skeleton-category skeleton-block"></div>
                <div class="article-skeleton-title skeleton-block skeleton-title"></div>
                <div class="article-skeleton-meta">
                    <span class="skeleton-block skeleton-pill"></span>
                    <span class="skeleton-block skeleton-pill"></span>
                </div>
                <div class="article-skeleton-credits">
                    <span class="skeleton-block skeleton-line"></span>
                    <span class="skeleton-block skeleton-line"></span>
                </div>
                <div class="article-skeleton-image skeleton-block"></div>
                <div class="article-skeleton-body">
                    <span class="skeleton-block skeleton-line"></span>
                    <span class="skeleton-block skeleton-line"></span>
                    <span class="skeleton-block skeleton-line"></span>
                    <span class="skeleton-block skeleton-line"></span>
                    <span class="skeleton-block skeleton-line short"></span>
                </div>
            </div>
            <header class="article-header">
                <span class="article-category feature-category" id="articleCategory">Article</span>
                <h1 id="articleTitle">CLSU Collegian Article</h1>
                <div class="article-meta">
                    <span class="date" id="articleDate"></span>
                    <span class="read-time" id="articleReadTime">10 min read</span>
                </div>
                <div class="article-credits" id="articleCredits"></div>
            </header>

            <figure class="featured-image" id="articleFigure">
                <div class="hero-placeholder"></div>
                <figcaption id="articleCaption"></figcaption>
            </figure>

            <div class="article-body" id="articleBody">
                <p>Select an article from the homepage to view the full story.</p>
            </div>

            <div class="share-section">
                <h3>Share this article</h3>
                <div class="share-buttons">
                    <button class="share-btn" data-platform="copy" type="button" aria-label="Copy share link">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M16.5 3h-7A2.5 2.5 0 0 0 7 5.5V6H6.5A2.5 2.5 0 0 0 4 8.5v10A2.5 2.5 0 0 0 6.5 21h7A2.5 2.5 0 0 0 16 18.5V18h.5A2.5 2.5 0 0 0 19 15.5v-10A2.5 2.5 0 0 0 16.5 3Zm-1 15.5a1 1 0 0 1-1 1h-7a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1H9v7.5A2.5 2.5 0 0 0 11.5 17H15.5v1.5Zm2.5-3a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1v-10a1 1 0 0 1 1-1h7A2.5 2.5 0 0 1 18 6.5v9Z"/>
                        </svg>
                        <span>Copy Share Link</span>
                    </button>
                    <button class="share-btn" data-platform="facebook" type="button" aria-label="Share on Facebook">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M13.5 21v-7h2.4l.4-3h-2.8V9.1c0-.9.3-1.6 1.6-1.6H16V4.8c-.4-.1-1.3-.1-2.3-.1-2.3 0-3.8 1.4-3.8 4V11H7.5v3h2.4v7h3.6Z"/>
                        </svg>
                        <span>Facebook</span>
                    </button>
                    <button class="share-btn" data-platform="twitter" type="button" aria-label="Share on X/Twitter">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M18.9 2H22l-6.78 7.75L23 22h-6.1l-4.78-6.24L6.66 22H3.54l7.25-8.29L1 2h6.25l4.32 5.7L18.9 2Zm-1.08 18h1.72L6.31 3.9H4.47l13.35 16.1Z"/>
                        </svg>
                        <span>X/Twitter</span>
                    </button>
                    <button class="share-btn" data-platform="instagram" type="button" aria-label="Share on Instagram">
                        <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                            <path d="M7.75 2h8.5A5.75 5.75 0 0 1 22 7.75v8.5A5.75 5.75 0 0 1 16.25 22h-8.5A5.75 5.75 0 0 1 2 16.25v-8.5A5.75 5.75 0 0 1 7.75 2Zm0 1.8A3.95 3.95 0 0 0 3.8 7.75v8.5a3.95 3.95 0 0 0 3.95 3.95h8.5a3.95 3.95 0 0 0 3.95-3.95v-8.5a3.95 3.95 0 0 0-3.95-3.95Zm8.95 1.35a1.2 1.2 0 1 1 0 2.4 1.2 1.2 0 0 1 0-2.4ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.8A3.2 3.2 0 1 0 12 15.2 3.2 3.2 0 0 0 12 8.8Z"/>
                        </svg>
                        <span>Instagram</span>
                    </button>
                </div>
                <p class="share-feedback" id="shareFeedback" aria-live="polite"></p>
                <p class="share-note">Copy Share Link copies the social preview URL used by Facebook, X/Twitter, and Instagram.</p>
            </div>
        </article>

        <aside class="article-sidebar">
            <div class="article-sidebar-skeleton article-skeleton" aria-hidden="true">
                <div class="article-sidebar-skeleton-title skeleton-block"></div>
                <div class="article-sidebar-skeleton-card">
                    <span class="skeleton-block skeleton-thumb"></span>
                    <div class="article-sidebar-skeleton-lines">
                        <span class="skeleton-block skeleton-line"></span>
                        <span class="skeleton-block skeleton-line short"></span>
                        <span class="skeleton-block skeleton-line shorter"></span>
                    </div>
                </div>
                <div class="article-sidebar-skeleton-card">
                    <span class="skeleton-block skeleton-thumb"></span>
                    <div class="article-sidebar-skeleton-lines">
                        <span class="skeleton-block skeleton-line"></span>
                        <span class="skeleton-block skeleton-line short"></span>
                        <span class="skeleton-block skeleton-line shorter"></span>
                    </div>
                </div>
            </div>
            <section class="related-articles">
                <h3>Other Articles</h3>
                <div class="related-list" id="relatedList"></div>
            </section>
        </aside>
    </main>
@endsection

