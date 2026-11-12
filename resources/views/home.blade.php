
@extends('layouts.app')

@section('title', 'Home | Café Ethereal')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@section('content')

<section class="hero-section">

    <div class="hero-content">
        <p class="hero-subtitle">WELCOME TO CAFÉ ETHEREAL</p>

        <h1>
            A Little Escape<br>
            <span>in Every Cup.</span>
        </h1>

        <p class="hero-description">
            Discover the perfect blend of rich coffee,
            comforting flavors, and peaceful moments.
            Your favorite place to slow down and enjoy life.
        </p>

        <div class="hero-buttons">
            <a href="{{ url('/about') }}" class="btn-primary">
                Discover Our Story
            </a>

            <a href="{{ url('/contact') }}" class="btn-secondary">
                Get in Touch
            </a>
        </div>
    </div>

</section>

<section class="welcome-section">

    <p class="section-subtitle">THE CAFÉ ETHEREAL EXPERIENCE</p>

    <h2>More Than Just Coffee</h2>

    <p>
        At Café Ethereal, every cup is an invitation
        to pause, connect, and create beautiful moments.
        Whether you are meeting friends, working, or
        simply enjoying your own company, there is
        always a place for you here.
    </p>

</section>

<section class="featured-section">

    <p class="section-subtitle">OUR FAVORITES</p>

    <h2>Made for Your Moments</h2>

    <div class="featured-grid">

        <div class="featured-card">
            <h3>Signature Coffee</h3>
            <p>
                Rich, aromatic coffee carefully prepared
                to brighten your day.
            </p>
        </div>

        <div class="featured-card">
            <h3>Comforting Treats</h3>
            <p>
                Delicious treats made to complement
                your favorite coffee.
            </p>
        </div>

        <div class="featured-card">
            <h3>Cozy Moments</h3>
            <p>
                A welcoming atmosphere where every
                visit feels special.
            </p>
        </div>

    </div>

</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endpush
