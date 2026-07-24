@php($active = $activePage ?? '')
<nav class="navbar">
    <div class="nav-container">
        <div class="logo">
            <a href="{{ url('/') }}" class="logo-link" aria-label="CLSU Collegian home">
                <span class="logo-mark" aria-hidden="true">
                    <img src="{{ asset('logo.png') }}" alt="">
                </span>
                <span class="logo-copy">
                    <span class="logo-kicker">Campus Publication</span>
                    <span class="logo-name"><span class="logo-name-primary">CLSU</span> <span class="logo-name-accent">Collegian</span></span>
                </span>
            </a>
        </div>
        <ul class="nav-menu">
            <li><a href="{{ url('/') }}" @class(['active' => $active === 'home'])>Home</a></li>
            <li><a href="{{ url('/news') }}" @class(['active' => $active === 'news'])>News</a></li>
            <li><a href="{{ url('/opinion') }}" @class(['active' => $active === 'opinion'])>Opinion</a></li>
            <li><a href="{{ url('/features') }}" @class(['active' => $active === 'features'])>Features</a></li>
            <li><a href="{{ url('/devcom') }}" @class(['active' => $active === 'devcom'])>DevCom</a></li>
            <li><a href="{{ url('/sports') }}" @class(['active' => $active === 'sports'])>Sports</a></li>
            <li><a href="{{ url('/literary') }}" @class(['active' => $active === 'literary'])>Literary</a></li>
            <li><a href="{{ url('/infographics') }}" @class(['active' => $active === 'infographics'])>Komiks</a></li>
            <li><a href="{{ url('/multimedia') }}" @class(['active' => $active === 'multimedia'])>Multimedia</a></li>
            <li><a href="{{ url('/issues') }}" @class(['active' => $active === 'issues'])>Archives</a></li>
            <li><a href="{{ url('/about') }}" @class(['active' => $active === 'about'])>About</a></li>
        </ul>
        <div class="nav-tools">
            <form class="header-search" role="search" action="#" aria-label="Site search" onsubmit="return false;">
                <label class="sr-only" for="site-search-{{ $active ?: 'site' }}">Search site</label>
                <span class="header-search-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" focusable="false">
                        <path d="M10.5 4a6.5 6.5 0 1 0 4.03 11.6l4.44 4.44 1.06-1.06-4.44-4.44A6.5 6.5 0 0 0 10.5 4Zm0 1.5a5 5 0 1 1 0 10 5 5 0 0 1 0-10Z"/>
                    </svg>
                </span>
                <input id="site-search-{{ $active ?: 'site' }}" class="header-search-input" type="search" placeholder="Search articles" aria-label="Search articles">
            </form>
            <div class="hamburger" aria-label="Toggle navigation" aria-expanded="false" role="button" tabindex="0">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</nav>


