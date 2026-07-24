@php($activePage = 'about')
@extends('layouts.app')
@section('page_title', 'About | CLSU Collegian')
@section('page_description', 'Learn more about CLSU Collegian, the official student publication of Central Luzon State University.')
@section('canonical_url', url('/=2'))
@section('body_attributes', '')
@section('header_after_nav')
    @include('partials.breaking-ticker')
@endsection

@section('content')
    <main class="about-main">
        <section class="about-hero">
            <div class="container">
                <div class="hero-content-wrapper">
                    <h1>About CLSU Collegian</h1>
                    <p>Keeping the 108-year legacy of campus journalism in Central Luzon State University alive.</p>
                    <div class="hero-accent"></div>
                </div>
            </div>
        </section>

        <section class="about-content">
            <div class="container">
                <div class="about-description">
                    <div class="story-card">
                        <span class="section-number">01</span>
                        <h2>HISTORY</h2>
                        <div class="story-text">
                            <p>The CLSU Collegian traces its roots to January 1918, when it began as Student Farmer during the era of the then Central Luzon Agricultural School. Founded by the school's male farm students, it became one of the earliest student publications in the institution's history. In the 1930s, Student Farmer ceased operations and was succeeded by The Plowman, which served as the official publication of the student body. As the institution evolved into Central Luzon Agricultural College, the publication was later renamed CLAC Collegian.</p>
                            <p>In 1964, the publication officially became the CLSU Collegian. Its first Editor-in-Chief was Eliseo Ruiz, who would later become university president. Like many campus publications, it faced periods of interruption, including a nearly two-year halt during the height of Martial Law. The paper eventually resumed operations with the guidance of Dr. Fulgencio Soriano from 1975 to 1980. Following the enactment of the Campus Journalism Act of 1991, the publication gained greater independence and continued its mission of serving the CLSU community.</p>
                        </div>
                    </div>
                </div>

                <div class="values">
                    <div class="values-header">
                        <span class="section-number">02</span>
                        <h2>OUR OBJECTIVES</h2>
                    </div>
                    <div class="values-grid">
                        <div class="value-card">
                            <div class="value-icon">Section 1</div>
                            <p>To disseminate information both from within and outside the school campus as to maximize students' participation in the society's political, economic, cultural and moral areas.</p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">Section 2</div>
                            <p>To develop intelligent and responsible student leadership and good citizenship in the preservation of free and democratic society through active journalism.</p>
                        </div>
                        <div class="value-card">
                            <div class="value-icon">Section 3</div>
                            <p>To further train competent student journalists in the application of the communication arts in journalism and the basic mechanism and technical skills in responsible journalism.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="editorial-board">
            <div class="container">
                <div class="board-header">
                    <span class="section-number">03</span>
                    <h2>EDITORIAL BOARD</h2>
                </div>
                <div class="board-group">
                    <h3 class="board-group-title">EXECUTIVES</h3>
                    <div class="board-grid executives-grid">
                        <div class="board-member"><div class="member-info"><h3>ALIANAH MARIE PANGILINAN</h3><p class="member-title">Editor-in-chief</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>JAMES WILLIAM SORIANO</h3><p class="member-title">Associate Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>HANNAH CATHERINE<br>MALLARI</h3><p class="member-title">Managing Editor for Administration</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>KATRINA ALESSANDRA DANTING</h3><p class="member-title">Managing Editor for Finance</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>ASHER TERBY ESQUIVEL</h3><p class="member-title">Circulations and Engagements Manager</p></div></div>
                    </div>
                </div>
                <div class="board-group">
                    <h3 class="board-group-title">SECTION EDITORS AND VISUAL HEADS</h3>
                    <div class="board-grid editors-grid">
                        <div class="board-member"><div class="member-info"><h3>DENNIS <br>MOISES</h3><p class="member-title">News Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>ALLAN <br>BULATAO</h3><p class="member-title">Opinion Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>REGINA ROSE<br>SUPEÃ‘A</h3><p class="member-title">Features Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>ELJOHN <br>TOLENTINO</h3><p class="member-title">Sports Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>REYMARC <br> ABAYA</h3><p class="member-title">DevCom Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>CHARLES KENNETH NEPOMUCENO</h3><p class="member-title">Literary Editor</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>CASSANDRA <br>CANSINO</h3><p class="member-title">Head Illustrator</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>JEMIMA PAGAD</h3><p class="member-title">Head Photojournalist</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>MERWIN LAD VELASCO</h3><p class="member-title">Head Layout Artist</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>RENZ JUSTINE AQUINO</h3><p class="member-title">Head Technical Director</p></div></div>
                        <div class="board-member"><div class="member-info"><h3>RIANA MIKAELA BAUTISTA</h3><p class="member-title">Head Broadcaster</p></div></div>
                    </div>
                </div>
                <h2 class="tagline">For Studentry: EQUALITY</h2>
            </div>
        </section>
    </main>
@endsection

