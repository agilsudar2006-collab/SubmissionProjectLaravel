<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Praktikum Laravel')</title>
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    <footer>
        <hr>
        Praktikum Laravel
    </footer>
</body>
</html>
