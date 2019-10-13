<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>App name - @yield('title')</title>
</head>
<body>
    <!-- As a link -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
    </nav>
    <header>
        <a href="/toArabic">العربية</a>
        <a href="/toEnglish">English</a>
    </header>

    @include('components.errors')

    <div class="container">
        @yield('content')
    </div>

    <footer>Footer يكون هنا</footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>