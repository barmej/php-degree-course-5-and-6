<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App name - @yield('title')</title>
</head>
<body>
    <header>
        <a href="/toArabic">العربية</a>
        <a href="/toEnglish">English</a>
    </header>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>

    <footer>Footer يكون هنا</footer>
</body>
</html>