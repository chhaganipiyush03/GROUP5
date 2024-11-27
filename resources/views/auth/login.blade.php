<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Favicon link -->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!-- Horizontal Navigation Bar -->
    <header>
        <div class="logo-container">
            <!-- Logo Image -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
            <span class="website-name">BlogSite</span>
        </div>
        <!-- Dark Mode Toggle Button -->
        <button class="theme-toggle">Switch to Dark Mode</button>
    </header>

    <!-- Login Form -->
    <main>
        <h1 class="login-title">Login</h1> <!-- Centered title -->
        <div class="login-box">
            <form action="{{ route('login.submit') }}" method="POST">
                @csrf
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

    <!-- JavaScript for Dark Mode Toggle -->
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
