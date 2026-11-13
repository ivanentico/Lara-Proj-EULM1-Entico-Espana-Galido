@extends('layouts.app')

@section('title', 'Our Story | Café Ethereal')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

<!-- HERO SECTION -->
<section class="about-hero">

    <div class="about-hero-text">
        <span class="about-eyebrow">THE STORY BEHIND EVERY CUP</span>

        <h1>
            A Place to Slow Down
            <span>and Feel at Home.</span>
        </h1>

        <p>
            More than just a coffee shop, Café Ethereal is a space
            where beautiful conversations, comforting flavors,
            and unforgettable moments come together.
        </p>

        <a href="#our-story" class="about-primary-btn">
            Discover Our Story <span>↗</span>
        </a>

        <div class="hero-note">
            <span class="hero-line"></span>
            <small>A LITTLE ESCAPE IN EVERY CUP.</small>
        </div>
    </div>

    <div class="about-hero-visual">
        <img
            src="{{ asset('images/about-cafe.jpg') }}"
            alt="Café Ethereal specialty coffee interior"
        >

        <div class="hero-floating-card">
            <span>OUR PHILOSOPHY</span>
            <h3>Good coffee. Slow moments. Warm memories.</h3>
        </div>

        <span class="hero-image-number">01 / 04</span>
    </div>

</section>


<!-- INTRODUCTION -->
<section class="about-intro">

    <span class="about-eyebrow">WELCOME TO CAFÉ ETHEREAL</span>

    <h2>
        Not just a destination.
        <span>A feeling.</span>
    </h2>

    <p>
        We believe that the simplest moments can become the most
        meaningful. A warm cup of coffee, a familiar smile, and
        a peaceful place to pause can make an ordinary day special.
    </p>

</section>


<!-- OUR STORY -->
<section class="story-section" id="our-story">

    <div class="story-photo">
        <img
            src="{{ asset('images/about-cafe.jpg') }}"
            alt="Freshly prepared specialty coffee"
        >

        <div class="photo-label">
            <span>THE ETHEREAL EXPERIENCE</span>
            <strong>Made with intention.</strong>
        </div>
    </div>

    <div class="story-description">

        <span class="about-eyebrow">01 — OUR BEGINNING</span>

        <h2>
            A story brewed
            with <em>passion.</em>
        </h2>

        <p>
            Café Ethereal was inspired by the idea of creating
            something more meaningful than an ordinary coffee
            experience.
        </p>

        <p>
            We envisioned a welcoming space where people could
            take a break, enjoy thoughtfully prepared beverages,
            and reconnect with the moments that matter.
        </p>

        <p>
            Every detail reflects our love for coffee, comfort,
            and genuine hospitality.
        </p>

        <div class="story-signature">
            <span>Our promise to you</span>
            <strong>A little escape in every cup.</strong>
        </div>

    </div>

</section>


<!-- BRAND HIGHLIGHTS -->
<section class="about-highlights">

    <div class="highlight-item">
        <span>01</span>
        <h3>Quality</h3>
        <p>Thoughtfully prepared coffee and delightful flavors.</p>
    </div>

    <div class="highlight-item">
        <span>02</span>
        <h3>Comfort</h3>
        <p>A relaxing atmosphere made for slowing down.</p>
    </div>

    <div class="highlight-item">
        <span>03</span>
        <h3>Connection</h3>
        <p>Meaningful conversations and memorable experiences.</p>
    </div>

</section>


<!-- MISSION AND VISION -->
<section class="purpose-section">

    <div class="purpose-heading">
        <span class="about-eyebrow">02 — OUR PURPOSE</span>

        <h2>
            What makes
            <em>us, us.</em>
        </h2>

        <p>
            Our purpose goes beyond serving coffee.
            It is about creating an experience worth returning to.
        </p>
    </div>

    <div class="purpose-content">

        <article class="purpose-card mission-card">
            <span class="purpose-number">01 / MISSION</span>

            <div class="purpose-symbol">✳</div>

            <h3>Our Mission</h3>

            <p>
                To provide quality coffee, comforting treats,
                and genuine hospitality in a welcoming environment
                where everyone feels valued and appreciated.
            </p>
        </article>

        <article class="purpose-card vision-card">
            <span class="purpose-number">02 / VISION</span>

            <div class="purpose-symbol">✧</div>

            <h3>Our Vision</h3>

            <p>
                To become a beloved café destination recognized
                for its inviting atmosphere, exceptional service,
                and meaningful coffee experiences.
            </p>
        </article>

    </div>

</section>


<!-- CAFE EXPERIENCE IMAGE -->
<section class="experience-section">

    <img
        src="{{ asset('images/cafe-interior.jpg') }}"
        alt="Peaceful modern coffee shop experience"
    >

    <div class="experience-overlay">
        <span>THE ART OF SLOW LIVING</span>

        <h2>
            Take a moment.
            <br>
            Make it meaningful.
        </h2>
    </div>

</section>


<!-- FINAL CTA -->
<section class="about-ending">

    <span class="about-eyebrow">YOUR PLACE, YOUR MOMENT</span>

    <h2>
        We'd love to
        <em>have you here.</em>
    </h2>

    <p>
        Whether it's your morning coffee or an afternoon escape,
        there's always a place for you at Café Ethereal.
    </p>

    <a href="https://www.facebook.com/profile.php?id=61590086683897" target="_blank" rel="noopener noreferrer" class="about-primary-btn">
        Get in Touch <span>↗</span>
    </a>

</section>

@endsection
