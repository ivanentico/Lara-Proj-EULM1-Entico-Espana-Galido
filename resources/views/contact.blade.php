@extends('layouts.app')

@section('title', 'Contact')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')
<section class="contact-hero">
    <h1>Get in Touch</h1>
    <p>Questions, reservations, or just want to say hi? We'd love to hear from you at Brew &amp; Bean Café.</p>
</section>

<section class="contact-wrapper">
    {{-- Contact details --}}
    <aside class="contact-info">
        <h2>Visit Brew &amp; Bean Café</h2>

        <div class="info-item">
            <span class="info-icon">📍</span>
            <div>
                <h3>Address</h3>
                <p>Rizal Street, Barangay Central,<br>Mati City, Davao Oriental</p>
            </div>
        </div>

        <div class="info-item">
            <span class="info-icon">📞</span>
            <div>
                <h3>Phone</h3>
                <p>+63 917 123 4567</p>
            </div>
        </div>

        <div class="info-item">
            <span class="info-icon">✉️</span>
            <div>
                <h3>Email</h3>
                <p>brewandbean@gmail.com</p>
            </div>
        </div>

        <div class="info-item">
            <span class="info-icon">🕒</span>
            <div>
                <h3>Opening Hours</h3>
                <p>Mon – Fri: 7:00 AM – 9:00 PM<br>Sat – Sun: 8:00 AM – 10:00 PM</p>
            </div>
        </div>
    </aside>

    {{-- Contact form --}}
    <div class="contact-form-box">
        <h2>Send Us a Message</h2>

        <div id="successMessage" class="success-message" role="status" hidden>
            ✅ Thank you! Your message has been sent. We'll get back to you soon.
        </div>

        <form id="contactForm" novalidate>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your full name">
                <span class="error-message" id="nameError"></span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="you@example.com">
                <span class="error-message" id="emailError"></span>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="What is this about?">
                <span class="error-message" id="subjectError"></span>
            </div>

            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" placeholder="Write your message here..."></textarea>
                <span class="error-message" id="messageError"></span>
            </div>

            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush