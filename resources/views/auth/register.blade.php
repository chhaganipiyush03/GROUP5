<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Favicon link -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Horizontal Navigation Bar -->
    <header>
        <div class="logo-container">
            <img src="images\logo.png" alt="Logo" class="logo">
            <span class="website-name">BlogSite</span>
        </div>
        <button class="theme-toggle">Switch to Dark Mode</button>
    </header>

    <!-- Registration Form -->
    <main>
        <h1 class="register-title">Sign Up</h1> <!-- Centered title -->
        <div class="register-box">
            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

                <button type="submit">Register</button>
            </form>
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </main>

    <script src="{{ asset('js/theme.js') }}"></script>
    
</body>

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

</html>
