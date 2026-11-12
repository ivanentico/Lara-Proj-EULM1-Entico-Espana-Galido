
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Café Ethereal')</title>

    <meta name="description" content="Café Ethereal - A little escape in every cup.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Shared Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Individual Page Styles -->
    @stack('styles')
</head>

<body>

    <!-- Navigation Bar -->
    <header class="site-header">
        <nav class="navbar">

            <a href="{{ url('/') }}" class="brand-logo">
                Café <span>Ethereal.</span>
            </a>

            <div class="nav-links">
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>
            </div>

        </nav>
    </header>

    <!-- Main Page Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="footer-content">

            <h2>Café Ethereal</h2>

            <p>A little escape in every cup.</p>

            <div class="footer-members">
                <p>Developed by:</p>
                <span>Entico</span>
                <span>Espana</span>
                <span>Galido</span>
            </div>

            <p class="copyright">
                &copy; {{ date('Y') }} Café Ethereal.
                All Rights Reserved.
            </p>

        </div>
    </footer>

    <!-- Individual Page Scripts -->
    @stack('scripts')

</body>
</html>
