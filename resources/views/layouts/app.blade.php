<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Рецепты')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background: #f6f7fb; }
        .avatar { width: 44px; height: 44px; object-fit: cover; border-radius: 50%; }
        .avatar-lg { width: 96px; height: 96px; object-fit: cover; border-radius: 50%; }
        .recipe-img { height: 220px; object-fit: cover; width: 100%; }
        .clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
        .clamp-5 { display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; overflow: hidden; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand fw-semibold" href="/"><span class="me-1">🍲</span>Рецепты</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="nav" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto gap-2 align-items-lg-center">
                <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                <li class="nav-item"><a class="nav-link" href="/author">Профиль автора</a></li>
                <li class="nav-item"><a class="nav-link" href="/login">Вход</a></li>
                <li class="nav-item"><a class="btn btn-primary" href="/register">Регистрация</a></li>
            </ul>
        </div>
    </div>
</nav>

<main class="py-4">
    <div class="container">
        @yield('content')
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
