@extends('layouts.app')

@section('title', 'Home | Café Ethereal')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<!-- HERO SECTION -->
<section class="home-hero">

    <div class="home-hero-content">

        <span class="home-eyebrow">SPECIALTY COFFEE HOUSE</span>

        <h1>
            A Little Escape
            <span>in Every Cup.</span>
        </h1>

        <p>
            Discover the perfect blend of rich coffee,
            comforting flavors, and peaceful moments.
            Your favorite place to slow down and enjoy life.
        </p>

        <div class="home-buttons">
            <a href="#favorites" class="home-primary-btn">
                Discover Our Favorites <span>↗</span>
            </a>

            <a href="#story" class="home-secondary-btn">
                Our Story
            </a>
        </div>

        <div class="home-note">
            <span class="home-line"></span>
            <small>MADE FOR YOUR EVERYDAY MOMENTS.</small>
        </div>

    </div>

    <div class="home-hero-visual">

        <img
            src="https://images.squarespace-cdn.com/content/v1/58b21ca7e58c62561f52c9c0/1595176132193-S5IA69DEBHX90GU174GT/67018701_2268708916499287_3482875605521793024_o.jpg?format=1000w"
            alt="Freshly brewed specialty coffee"
        >

        <div class="home-floating-card">
            <span>TODAY'S SPECIAL</span>
            <h3>Our Signature Coffee</h3>
        </div>

        <span class="home-image-number">01 / 04</span>

    </div>

</section>


<!-- INTRODUCTION -->
<section class="home-intro">

    <span class="home-eyebrow">THE CAFÉ ETHEREAL EXPERIENCE</span>

    <h2>
        More Than Just Coffee.
        <span>A Feeling.</span>
    </h2>

    <p>
        At Café Ethereal, every cup is an invitation to pause,
        connect, and create beautiful moments. Whether you are
        meeting friends, working, or simply enjoying your own
        company, there is always a place for you here.
    </p>

</section>


<!-- STORY SECTION -->
<section class="home-story" id="story">

    <div class="home-story-image">

        <img
            src="https://scontent.fcgy3-2.fna.fbcdn.net/v/t39.30808-6/825327332_122119752231336222_8345914382698746788_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x1366&ctp=s2048x1366&_nc_cat=110&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeF1UymoAM9Z35Qs-x82vjD3qKxyDlMcBQiorHIOUxwFCCCAp1oocJ24szDAEdSWFFZwrp9ekny5QZZ2qJrYCWyV&_nc_ohc=-ksfyaN0eRUQ7kNvwE-Eke2&_nc_oc=AdpsI02MVWNFQDZlh5E7B6ZcqrYnUI7haDpgrc-eGaawbAehrQOO20Zo0X0Bcl9jnW0&_nc_zt=23&_nc_ht=scontent.fcgy3-2.fna&_nc_gid=kX5Yx50QhBdEveuYEmbcSg&_nc_ss=7b2a8&oh=00_AQQ1ovNGLXBrSKmjBNrtaCn34D_H-oRQ8W3sLodfLMmy4g&oe=6AFB5FAC"
            alt="Warm and welcoming café interior"
        >

        <div class="home-photo-label">
            <span>THE ETHEREAL EXPERIENCE</span>
            <strong>Made with intention.</strong>
        </div>

    </div>

    <div class="home-story-content">

        <span class="home-eyebrow">OUR STORY</span>

        <h2>
            Made for Moments,
            Brewed with <em>Love.</em>
        </h2>

        <p>
            Café Ethereal was created for people who appreciate
            good coffee, beautiful spaces, and meaningful moments.
        </p>

        <p>
            From carefully prepared beverages to our welcoming
            atmosphere, every detail is designed to make
            your visit special.
        </p>

        <div class="home-story-signature">
            <span>OUR PROMISE TO YOU</span>
            <strong>A little escape in every cup.</strong>
        </div>

        <a href="{{ url('/about') }}" class="home-primary-btn">
            Discover Our Story <span>↗</span>
        </a>

    </div>

</section>


<!-- FAVORITES SECTION -->
<section class="home-favorites" id="favorites">

    <div class="home-favorites-heading">

        <span class="home-eyebrow">OUR FAVORITES</span>

        <h2>
            Made for Your
            <em>Moments.</em>
        </h2>

        <p>
            Discover the little things that make every visit special.
        </p>

    </div>

    <div class="home-favorites-grid">

        <article class="home-favorite-card">

            <div class="favorite-image">
                <img
                    src="https://images.squarespace-cdn.com/content/v1/58b21ca7e58c62561f52c9c0/1595176132193-S5IA69DEBHX90GU174GT/67018701_2268708916499287_3482875605521793024_o.jpg?format=1000w"
                    alt="Freshly prepared specialty coffee"
                >
            </div>

            <div class="favorite-content">
                <span>01 — OUR SIGNATURE</span>
                <h3>Signature Coffee</h3>
                <p>
                    Rich, aromatic coffee carefully prepared
                    to brighten your day.
                </p>
            </div>

        </article>

        <article class="home-favorite-card">

            <div class="favorite-image">
                <img
                    src="https://scontent.fcgy3-2.fna.fbcdn.net/v/t39.30808-6/778984868_122115184983336222_3809751414470295337_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x1366&ctp=s2048x1366&_nc_cat=111&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=f727a1&_nc_eui2=AeE4PvLvu-8T3hiR1ZyXYzkjhxcTmKN5GAWHFxOYo3kYBTfB4ngS6hA-XFvuviHgygvPh66ybQfYNL_CEBmhGHid&_nc_ohc=386x95Ev1iUQ7kNvwEnoScg&_nc_oc=Adp-nCwyPYrgKKvw8LEcRMs24PP1I-OQS2-hTsHg0sylb1opHpgcrqKCeHlkiiHtQ-M&_nc_zt=23&_nc_ht=scontent.fcgy3-2.fna&_nc_gid=Hc3XJP90fPCr8fD1A3uwFw&_nc_ss=7b2a8&oh=00_AQS0JuI4fwl5IH-tokeRO2KfGdduARA8alsr2sE_h4jy1Q&oe=6AFB6C83"
                    alt="Freshly baked pastries"
                >
            </div>

            <div class="favorite-content">
                <span>02 — FRESHLY PREPARED</span>
                <h3>Comforting Treats</h3>
                <p>
                    Delicious freshly baked treats made
                    to complement your favorite coffee.
                </p>
            </div>

        </article>

        <article class="home-favorite-card">

            <div class="favorite-image">
                <img
                    src="https://scontent.fcgy3-2.fna.fbcdn.net/v/t39.30808-6/781979660_1069452502489875_4590908656389713831_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x1536&ctp=s2048x1536&_nc_cat=107&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeGNdmggaHwzUJdJKHOgbjsuVFyd-k9DxR5UXJ36T0PFHjD3jwuoYBqBJQhMPJLQGLw9h60OXM5L776leaTuyifk&_nc_ohc=KAWyKi6WCj8Q7kNvwHlnxT7&_nc_oc=AdrG1hY9M6tzoQ93rFScgjr6CIww-kaoPkZpOjga2oYPBIMUe8QmeNmqlYyRrnGmBV0&_nc_zt=23&_nc_ht=scontent.fcgy3-2.fna&_nc_gid=CUiHuTmfTp2pVwRn6r51jw&_nc_ss=7b2a8&oh=00_AQRFgDlLmOZbaAiS_ngW2eCkk2eYrnUKK-Lhup-xLG1ZKg&oe=6AFB5621"
                    alt="Cozy café atmosphere"
                >
            </div>

            <div class="favorite-content">
                <span>03 — YOUR HAPPY PLACE</span>
                <h3>Cozy Moments</h3>
                <p>
                    A welcoming atmosphere where every
                    visit feels special.
                </p>
            </div>

        </article>

    </div>

</section>


<!-- FINAL CTA -->
<section class="home-ending">

    <span class="home-eyebrow">YOUR PLACE, YOUR MOMENT</span>

    <h2>
        Your next favorite
        <em>moment awaits.</em>
    </h2>

    <p>
        Take a break from the everyday and experience
        something a little more special.
    </p>

    <a href="{{ url('/contact') }}" class="home-primary-btn">
        Visit Café Ethereal <span>↗</span>
    </a>

</section>

@endsection

@push('scripts')
<script src="{{ asset('js/home.js') }}" defer></script>
@endpush
