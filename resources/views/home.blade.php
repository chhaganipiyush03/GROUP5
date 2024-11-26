<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Sign Up</a></li>
            </ul>
        </nav>
        <button class="theme-toggle">Switch to Dark Mode</button>
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
        <p>&copy; 2024 BlogSite. All Rights Reserved.</p>
    </footer>
    <script src="{{ asset('js/theme.js') }}"></script>
</body>
</html>
