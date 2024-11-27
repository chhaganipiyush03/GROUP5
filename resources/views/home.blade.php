<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <!-- Favicon link -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
    
<body>
    <header>
        <!-- Horizontal Navigation Bar -->
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
            </ul>
        </nav>
        <!-- Dark Mode Toggle Button -->
        <button class="theme-toggle" id="themeToggle">
            <span id="themeIcon" class="sun-moon-icon">&#9733;</span>
        </button>
    </header>

    <main>
        <h1>Welcome to the Blog</h1>
        <section class="blogs">
            @foreach ($blogs as $blog)
                <article>
                    <h2>{{ $blog['title'] }}</h2>
                    <p>{{ $blog['excerpt'] }}</p>
                </article>
            @endforeach
        </section>
    </main>

    <footer>
    <div class="footer-content">
        <p>&copy; 2024 Nature Chronicles. All Rights Reserved. | Designed by GreenTech Studios | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a></p>
    </div>
    <div class="social-media">
        <a href="https://www.facebook.com/naturechronicles" target="_blank">
            <img src="facebook-icon.png" alt="Facebook">
        </a>
        <a href="https://twitter.com/naturechronicles" target="_blank">
            <img src="twitter-icon.png" alt="Twitter">
        </a>
        <a href="https://www.instagram.com/naturechronicles" target="_blank">
            <img src="instagram-icon.png" alt="Instagram">
        </a>
        <a href="https://www.linkedin.com/company/naturechronicles" target="_blank">
            <img src="linkedin-icon.png" alt="LinkedIn">
        </a>
    </div>
</footer>



    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
