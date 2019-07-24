<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Weibo App') - Laravel 入门教程</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="/" class="navbar-brand">Weibo App</a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a href="/help" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Log in</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>