@extends('layouts.app')

@section('title', 'Contact Us | Café Ethereal')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<!-- ================= CONTACT HERO ================= -->
<section class="contact-hero">

    <div class="contact-hero-media">
        <img
            src="{{ asset('images/contact-cafe.jpg') }}"
            alt="Welcoming Café Ethereal coffee shop"
            fetchpriority="high"
            decoding="async"
        >
    </div>

    <div class="contact-hero-content">

        <span class="contact-eyebrow">
            WE'D LOVE TO HEAR FROM YOU
        </span>

        <h1>
            Let's Start a
            <span>Conversation.</span>
        </h1>

        <p>
            Have a question, suggestion, or simply want to say hello?
            We'd love to hear from you. Every message is an opportunity
            to connect.
        </p>

        <a href="#contact-main" class="contact-hero-btn">
            Send Us a Message
            <span aria-hidden="true">↗</span>
        </a>

    </div>

    <div class="contact-image-caption">
        <span>A LITTLE ESCAPE</span>
        <h3>Every connection begins with a hello.</h3>
    </div>

</section>


<!-- ================= MAIN CONTACT SECTION ================= -->
<section class="contact-main" id="contact-main">

    <!-- CONTACT INFORMATION -->
    <div class="contact-information">

        <span class="contact-eyebrow">
            CONTACT INFORMATION
        </span>

        <h2>Let's Connect.</h2>

        <p>
            Visit us, send us a message, or get in touch.
            We would be happy to hear from you.
        </p>


        <!-- ADDRESS -->
        <div class="contact-info-item">

            <div class="contact-info-icon" aria-hidden="true">
                ⌖
            </div>

            <div>
                <h3>Cafe Ethereal</h3>

                <p>
                    1st, Pareja Subdivision, Butuan City,
                    8600 Agusan del Norte.
                </p>
            </div>

        </div>


        <!-- EMAIL -->
        <div class="contact-info-item">

            <div class="contact-info-icon" aria-hidden="true">
                ✉
            </div>

            <div>
                <h3>Email Address</h3>

                <p>
                    <a href="mailto:cafeethereal2021@gmail.com">
                        cafeethereal2021@gmail.com
                    </a>
                </p>
            </div>

        </div>


        <!-- PHONE -->
        <div class="contact-info-item">

            <div class="contact-info-icon" aria-hidden="true">
                ☎
            </div>

            <div>
                <h3>Contact Number</h3>

                <p>
                    <a href="tel:09458373519">
                        0945-837-3519
                    </a>
                </p>
            </div>

        </div>


        <!-- OPENING HOURS -->
        <div class="contact-info-item">

            <div class="contact-info-icon" aria-hidden="true">
                ◷
            </div>

            <div>
                <h3>Opening Hours</h3>

                <p>MON TO SAT 7AM - 12AM</p>
                <p>SUNDAY CLOSED</p>
            </div>

        </div>


        <!-- SOCIAL LINKS -->
        <div class="contact-social">

            <span>FOLLOW OUR JOURNEY</span>

            <div class="social-links">

                <a href="#"
                   aria-label="Facebook"
                   target="_blank"
                   rel="noopener noreferrer">
                    f
                </a>

                <a href="#"
                   aria-label="Instagram"
                   target="_blank"
                   rel="noopener noreferrer">
                    ig
                </a>

                <a href="#"
                   aria-label="TikTok"
                   target="_blank"
                   rel="noopener noreferrer">
                    tk
                </a>

            </div>

        </div>

    </div>


    <!-- ================= CONTACT FORM ================= -->
    <div class="contact-form-container">

        <div class="form-heading">

            <span class="contact-eyebrow">
                SEND US A MESSAGE
            </span>

            <h2>We'd Love to Hear From You.</h2>

            <p>
                Fill out the form below and let us know what's on your mind.
            </p>

        </div>


        <form id="contactForm" novalidate>

            <!-- NAME AND EMAIL -->
            <div class="form-row">

                <div class="form-group">

                    <label for="name">
                        Full Name
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your full name"
                        autocomplete="name"
                        required
                    >

                    <small
                        class="error-message"
                        id="nameError">
                    </small>

                </div>


                <div class="form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        autocomplete="email"
                        required
                    >

                    <small
                        class="error-message"
                        id="emailError">
                    </small>

                </div>

            </div>


            <!-- SUBJECT -->
            <div class="form-group">

                <label for="subject">
                    Subject
                </label>

                <input
                    type="text"
                    id="subject"
                    name="subject"
                    placeholder="What is your message about?"
                    required
                >

                <small
                    class="error-message"
                    id="subjectError">
                </small>

            </div>


            <!-- MESSAGE -->
            <div class="form-group">

                <label for="message">
                    Your Message
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="6"
                    placeholder="Write your message here..."
                    required
                ></textarea>

                <small
                    class="error-message"
                    id="messageError">
                </small>

            </div>


            <!-- SUBMIT BUTTON -->
            <button type="submit" class="contact-submit-btn">

                Send Message
                <span aria-hidden="true">↗</span>

            </button>


            <!-- SUCCESS MESSAGE -->
            <div
                id="formSuccess"
                class="form-success"
                role="status"
                aria-live="polite"
                hidden
            >

                <strong>
                    Thank you for reaching out!
                </strong>

                <p>
                    Your form passed validation successfully.
                    This is a demonstration; your message has not
                    been sent to a server.
                </p>

            </div>

        </form>

    </div>

</section>


<!-- ================= GOOGLE MAP LOCATION ================= -->
<section class="contact-location">

    <div class="location-heading">

        <span class="contact-eyebrow">
            COME VISIT US
        </span>

        <h2>
            Find Your Way to
            <em>Café Ethereal.</em>
        </h2>

        <p>
            We'd love to welcome you! Visit us and enjoy
            a little escape in every cup.
        </p>

    </div>


    <div class="location-map-container">

        <iframe
            title="Google Maps location of Café Ethereal in Butuan City"
            src="https://maps.google.com/maps?q=1st%2C%20Pareja%20Subdivision%2C%20Butuan%20City%2C%20Agusan%20del%20Norte&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%"
            height="450"
            style="border: 0;"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>


        <!-- MAP FOOTER -->
        <div class="location-footer">

            <div>

                <h3>Café Ethereal</h3>

                <p>
                    1st, Pareja Subdivision, Butuan City,
                    8600 Agusan del Norte.
                </p>

            </div>


            <a
                href="https://maps.app.goo.gl/vEbWi15LGFUUAfbs6"
                target="_blank"
                rel="noopener noreferrer"
                class="location-directions-btn">

                Get Directions
                <span aria-hidden="true">↗</span>

            </a>

        </div>

    </div>

</section>


<!-- ================= CLOSING SECTION ================= -->
<section class="contact-ending">

    <span class="contact-eyebrow">
        A LITTLE ESCAPE IN EVERY CUP
    </span>

    <h2>
        We Can't Wait
        <em>to Welcome You.</em>
    </h2>

    <p>
        Good coffee, genuine connections, and beautiful moments
        are always waiting for you at Café Ethereal.
    </p>

    <a href="{{ url('/') }}" class="contact-back-btn">

        Back to Home
        <span aria-hidden="true">↗</span>

    </a>

</section>

@endsection


@push('scripts')
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush