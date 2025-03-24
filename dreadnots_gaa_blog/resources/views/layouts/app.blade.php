

<!DOCTYPE html>
<html>
<head>
    <title>Dreadnots GAA Blog</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> |
        <a href="{{ route('about') }}">About</a> |
        <a href="{{ route('contact') }}">Contact</a> |
        <a href="{{ route('players.index') }}">Players</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
